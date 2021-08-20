<?php
namespace App\Http\Controllers;
use Redirect;
use Auth;
//use Input;
use Session;
use PDF;
use File;

//use PaypalMassPayment;

use Illuminate\Http\Request;
use App\Exports\UsersExport;

use URL;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\User;
use App\Models\Role;

use App\Mail\WelcomeMail;
use App\Mail\PasswordChangeMail;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserController extends Controller
{
	public function __construct()
	{
		// $this->middleware(['auth','verified']);
	}

	public function index()
	{
		$sorting_array = array();

		$orderby = Request()->orderby;
		$order = Request()->order;

		if(!$orderby && !$order)
		{
			$orderby = 'id';
			$order = 'desc';
		}

		$column_array = array('id' => 'Id', 'display_name' => 'Role', 'name' => 'Name', 'email' => 'Email', 'created_at' => 'Created At', 'last_login' => 'Last Login At');

		$search = Request()->search;

		$where = "status!='2' and (role_id='1') ";

		if($search)
		{
			$search_column_array = array('users.id' => 'Id', 'roles.display_name' => 'Role', 'users.name' => 'Name', 'users.email' => 'Email', 'users.created_at' => 'Created At', 'users.last_login' => 'Last Login At');

			$where .= " and (";
			$i=1;
			foreach($search_column_array as $key=>$val)
			{
				if($i>1)
				{
					$where .= " or ";
				}

				$where .= $key." like '%".$search."%'";
				$i++;
			}
			$where .= ")";
		}

		$item_display_per_page = config('admin.pagination');
		$users = User::join('roles', 'users.role_id', '=', 'roles.id')
		->select('users.*','roles.name as role_name','roles.display_name')
		->whereRaw($where)
		->orderBy($orderby, $order)
		->paginate($item_display_per_page);

		foreach($column_array as $key => $value)
		{
			$sorting_class = 'sorting';
			$sorting_url_orderby = $key;
			$sorting_url_order = 'asc';

			if($orderby==$key)
			{
				$sorting_class = ( $order=='asc' ? 'sorting_asc' : 'sorting_desc' );

				$sorting_url_order = ( $order=='asc' ? 'desc' : 'asc' );
			}

			$sorting_url = 'user?'.($search!="" ? 'search='.$search.'&' : '').'orderby='.$sorting_url_orderby.'&order='.$sorting_url_order;

			$sorting_array[$key] = array('sorting_class' => $sorting_class, 'sorting_url' => $sorting_url);
		}

		return view('admin.user.index', compact('users','column_array','sorting_array','search'));
	}

	public function customer()
	{
		$sorting_array = array();

		$orderby = Request()->orderby;
		$order = Request()->order;

		if(!$orderby && !$order)
		{
			$orderby = 'id';
			$order = 'desc';
		}

		$column_array = array('id' => 'Id', 'display_name' => 'Role', 'name' => 'Name','email' => 'Email','status' => 'Status', 'created_at' => 'Created At', 'last_login' => 'Last Login At');

		$search = Request()->search;

		$where = "status!='2' and role_id='2' ";

		if($search)
		{
			$search_column_array = array('users.id' => 'Id', 'roles.display_name' => 'Role', 'users.name' => 'Name','users.email' => 'Email','users.status' => 'Status', 'users.created_at' => 'Created At', 'users.last_login' => 'Last Login At');

			$where .= " and (";
			$i=1;
			foreach($search_column_array as $key=>$val)
			{
				if($i>1)
				{
					$where .= " or ";
				}

				$where .= $key." like '%".$search."%'";
				$i++;
			}
			$where .= ")";
		}

		$item_display_per_page = config('admin.pagination');
		$users = User::join('roles', 'users.role_id', '=', 'roles.id')
		->select('users.*','roles.name as role_name','roles.display_name')
		->whereRaw($where)
		->orderBy($orderby, $order)
		->paginate($item_display_per_page);

		foreach($column_array as $key => $value)
		{
			$sorting_class = 'sorting';
			$sorting_url_orderby = $key;
			$sorting_url_order = 'asc';

			if($orderby==$key)
			{
				$sorting_class = ( $order=='asc' ? 'sorting_asc' : 'sorting_desc' );

				$sorting_url_order = ( $order=='asc' ? 'desc' : 'asc' );
			}

			$sorting_url = 'proofreader?'.($search!="" ? 'search='.$search.'&' : '').'orderby='.$sorting_url_orderby.'&order='.$sorting_url_order;

			$sorting_array[$key] = array('sorting_class' => $sorting_class, 'sorting_url' => $sorting_url);
		}

		return view('admin.user.index', compact('users','column_array','sorting_array','search'));
	}

	public function add()
	{
		$roles = Role::orderBy('display_name', 'asc')->where('id','=','1')->get();
		return view('admin.user.add', compact('roles'));
	}

	public function insert(Request $request)
	{
		$data = $request->all();

		$rules = array(
			'role_id' => 'required|int',
			'name' => 'required|string|max:191',
			//'l_name' => 'required|string|max:255',
			'email' => 'required|string|email|max:191|unique:users',
			//'username' => 'required|string|max:255|unique:users',
			'password' => 'required|string|min:8|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
			'phone_number' => 'required|digits:10|unique:users',
			//'phone_number' => 'required|regex:/^\d{3}-\d{3}-\d{4}$/|min:10',
			'status' => 'required|int'
		);

		$customMessages = array(
            //'username.required'  => 'Please enter username',
            //'username.unique'  => 'The username is already in use on the system. Please use a different username.',
            'email.required'  => 'Please enter Email address',
            'email.unique'  => 'The email is already in use on the system. Please use a different email.',
            'password.regex' => 'The :attribute field must have: a minimum of 1 lower case letter [a-z] and a minimum of 1 upper case letter [A-Z] and a minimum of 1 numeric character [0-9] and a minimum of 1 special character: ~`!@#$%^&*()-_+={}[]|\;:"<>,./?'
         ); 

		if($request->hasfile('avatar'))
		{
			$rules['avatar'] = 'mimes:jpeg,png,jpg,gif,svg|max:2048';
		}

		$validator = Validator::make($data , $rules, $customMessages);

		if ($validator->fails())
		{
			return Redirect::to('admin/user/add')->withErrors($validator) 
			->withInput(request()->except('password')); 
		}
		else
		{
			try {
			$name = $request->name;
			//$lname = $request->l_name;
			$fullname = $fname.' '. $lname;
			$email = $request->email;
			//$username = $request->username;
			$phone_number = $request->phone_number;
			$role_id = $request->role_id;
			$password = $request->password;
			$status = $request->status;

			$address = $request->address;
			$aadhaar_number = $request->aadhaar_number;

			$avatar_filename = '';
			if($request->hasfile('avatar'))
			{
				$avatar = $request->file('avatar');
				$filename = $avatar->getClientOriginalName();
				$filename = str_replace("&", "and", $filename);
				$filename = str_replace(" ", "_", $filename);
				$filename = time().$filename;
				$avatar->move(public_path().'/uploads/', $filename);
				$avatar_filename = $filename;
			}
			$referral_code = $role_id=='2'?strtoupper(Str::random(9)):'';

			$created_at = date('Y-m-d H:i:s'); 
			$user_id = DB::table('users')->insertGetId([ 
			    'role_id' => $role_id,
			    'name' => $name,
			    'email' => $email,
			    //'username' => $username,
			    'avatar' => $avatar_filename,
			    'phone_number' => $phone_number,
			    'password' => Hash::make($password),
			    
			    'address' => $address,
			    'aadhaar_number' => $aadhaar_number,
				'referral_code' => $referral_code,
			    'status' => $status,
			    'created_at' => $created_at
			]);
			/*New User Email*/
			$data1 = array('fullname' => $name, 'email' => $email, 'password' => $password);
	        Mail::to($email)->send(new WelcomeMail($data1));

			return redirect()->back()->with('success', true);

			} catch (\Exception $e) {
				DB::rollback();
				return Redirect::back()->withErrors(array('errordetailsd' => $e->getMessage()))->withInput($request->all());
			}

		}


	}

	public function edit($id)
	{
		$user = User::where('id',$id)->get();
		$roles = Role::orderBy('display_name', 'asc')->where('id','=','1')->get();

		return view('admin.user.edit', compact('user', 'roles'));
	}

	public function update(Request $request)
	{
		$data = $request->all();

		$id = $request->id;

		$role_id = $request->role_id;
		$name = $request->name;
		$email = $request->email;
		// $username = $request->username;
		$phone_number = $request->phone_number;
		$password = $request->password;
		$status = $request->status;

		$address = $request->address;
		$aadhaar_number = $request->aadhaar_number;

		$rules = array(
			'role_id' => 'required|int',
			'name' => 'required|string|max:191',
			'email' => 'required|string|email|max:255|unique:users,email,'.$id,
			//'username' => 'required|string|max:255|unique:users,username,'.$id,
			'phone_number' => 'required|digits:10|unique:users,phone_number,'.$id,
			//'phone_number' => 'required|regex:/^\d{3}-\d{3}-\d{4}$/|min:10',
			'status' => 'required|int'
		);

		$customMessages = array(
            //'username.required'  => 'Please enter username',
            //'username.unique'  => 'The username is already in use on the system. Please use a different username.',
            'email.required'  => 'Please enter Email address',
            'email.unique'  => 'The email is already in use on the system. Please use a different email.'
         );


		if($request->hasfile('avatar'))
		{
			$rules['avatar'] = 'mimes:jpeg,png,jpg,gif,svg|max:2048';
		}

		if($password)
		{
			$rules['password'] = 'min:8|confirmed';
		}

		$validator = Validator::make($data , $rules, $customMessages);

		if ($validator->fails())
		{
			return Redirect::to('admin/user/edit/'.$id)->withErrors($validator) 
			->withInput(request()->except('password')); 
		}
		else
		{
			try {
			$updated_at = date('Y-m-d H:i:s');
			//'domain_id' => $domain_id,
			$update_array = array('role_id' => $role_id, 'name' => $name, 'email' => $email, 'status' => $status, 'updated_at' => $updated_at); 

				//$update_array['address'] = $address;
				$update_array['phone_number'] = $phone_number;

			$user = User::where('id',$id)->get();
			if($request->hasfile('avatar'))
			{
				if($user[0]->avatar!='' && file_exists(public_path().'/uploads/'.$user[0]->avatar))
				{
					unlink(public_path().'/uploads/'.$user[0]->avatar);
				}
				$avatar = $request->file('avatar');
				$filename = $avatar->getClientOriginalName();
				$filename = str_replace("&", "and", $filename);
				$filename = str_replace(" ", "_", $filename);
				$filename = time().$filename;
				$avatar->move(public_path().'/uploads/', $filename);
				$update_array['avatar'] = $filename;
			}
			if ($user[0]->referral_code=='' && $role_id=='2') {
				$referral_code = strtoupper(Str::random(9));
				$update_array['referral_code'] = $referral_code;
			}

			if($password)
			{
				$update_array['password'] = Hash::make($password);
			}
			/*if ($user[0]->status=='0' && $status=='1' && $user[0]->last_login=='' && $user[0]->role_id=='2') {
				$fullname = $fname.' '.$lname;
				$data1 = array('fullname' => $fullname, 'email' => $email);
		        Mail::to($email)->send(new AccountApprovedMail($data1));
			}*/

			DB::table('users')
			->where('id', $id)
			->update($update_array); 

			return redirect()->back()->with('success', true);

			} catch (\Exception $e) {
				DB::rollback();
				return Redirect::back()->withErrors(array('errordetailsd' => $e->getMessage()))->withInput(Request()->all());
			}

		}
	}

	public function view($id)
	{
		$user = User::select('users.*','roles.name as role_name','jv_domain.name as domain_name')
		->join('roles', 'users.role_id', '=', 'roles.id')
		->leftjoin('jv_domain', 'users.domain_id', '=', 'jv_domain.id')
		->where('users.id',$id)
		->get(); 

		return view('admin.user.view', compact('user'));
	}

	public function delete($id)
	{
		$user = User::where('id',$id)->get();
		if($user[0]->avatar!='' && file_exists(public_path().'/uploads/'.$user[0]->avatar))
		{
			unlink(public_path().'/uploads/'.$user[0]->avatar);
		}

		DB::delete('delete from users where id = ?',[$id]);

		return redirect()->back()->with('delete_success', true);
	}

	public function status($id,$status)
	{
		if ($status==1) {
			$status = '0';
		}else{
			$status = '1';
		}
		$update_array = array('status' => $status);
		$user = User::where('id',$id)->get();
		if ($user[0]->status=='0' && $status=='1' && $user[0]->last_login=='' && $user[0]->role_id=='2') {
			/*Approved User Email*/
			$fullname = $fname.' '.$lname;
			$data1 = array('fullname' => $fullname, 'email' => $email);
	        Mail::to($email)->send(new AccountApprovedMail($data1));
		}
		DB::table('users')
		->where('id', $id)
		->update($update_array);
		return redirect()->back()->with('status_success', true);
	}

	public function logout()
	{
		if (Auth::check()) {
			$user = Auth::user();
			$update_array = array('already_logged' => 0);
	        DB::table('users')
	        ->where('id', $user->id)
	        ->update($update_array);
		}
			// logging out user
			Auth::logout();
			// redirection to login screen 
		return Redirect::to('login'); 
	}

	/* My Profile Get*/
	public function my_profile()
	{
		$setting = DB::table('edbg_settings')->whereIn('id', array(5, 6, 7))->get();
		$title = 'Profile';
		@$setting[0]->value = $title;
		@$setting[1]->value = $title;
		@$setting[2]->value = $title;

		$page_image = '';
		$page_url = url('profile');
		$site_logo = config('site.logo');
		if ($site_logo && File::exists(public_path('uploads/'.$site_logo)) ){
			$page_image = url('/uploads/'.$site_logo);
		}

		return view('frontend.profile', compact('setting','page_url','page_image'));
	} 

	/* Edit Profile Get*/
	public function edit_profile()
	{
		$setting = DB::table('edbg_settings')->whereIn('id', array(5, 6, 7))->get();
		$title = 'Edit Profile';
		@$setting[0]->value = $title;
		@$setting[1]->value = $title;
		@$setting[2]->value = $title;

		$page_image = '';
		$page_url = url('edit-profile');
		$site_logo = config('site.logo');
		if ($site_logo && File::exists(public_path('uploads/'.$site_logo)) ){
			$page_image = url('/uploads/'.$site_logo);
		}

		return view('frontend.edit_profile', compact('setting','page_url','page_image'));
	} 

	/* Update Profile Post*/
	public function updateProfile(Request $request)
	{
		$id = $request->id;
		$user = Auth::user();
		if ($id != $user->id) {
			\Session::flash('message','Sorry, Profile is not updated! Please try again.');
			return redirect()->back();
		}

		$rules = array(
			'first_name' => 'required|string|max:191',
			'last_name' => 'required|string|max:191',
			'email' => 'required|string|email|max:191|unique:users,email,'.$id,
			'phone_number' => 'required|int|min:10|unique:users,phone_number,'.$id,
		);

		if($request->hasfile('avatar'))
		{
			$rules['avatar'] = 'mimes:jpeg,png,jpg,gif,svg|max:2048';
		}

		$validator = Validator::make($request->all() , $rules);

		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator) 
			->withInput(request()->except('password')); 
		}
		else
		{
			if($request->hasfile('avatar'))
			{
				if($user->avatar!='' && file_exists(public_path().'/uploads/'.$user->avatar))
				{
					unlink(public_path().'/uploads/'.$user->avatar);
				}
				$avatar = $request->file('avatar');
				$filename = $avatar->getClientOriginalName();
				$filename = str_replace("&", "and", $filename);
				$filename = str_replace(" ", "_", $filename);
				$filename = time().$filename;
				$avatar->move(public_path().'/uploads/', $filename);
				//$update_array['avatar'] = $filename;
				$user->avatar = $filename;
			}

			$user->first_name = $request->first_name;
			$user->last_name = $request->last_name;
			$user->phone_number = $request->phone_number;
			$user->gst_number = $request->gst_number;
			$user->landline_number = $request->landline_number;
			$user->save();

			$msg = 'Your account has been updated successfully.' ;
			\Session::flash('message',$msg);
			return redirect()->back();

		}
	}

	/* Change Password Get*/
	public function change_password()
	{
		$setting = DB::table('edbg_settings')->whereIn('id', array(5, 6, 7))->get();
		$title = 'Change Password';
		@$setting[0]->value = $title;
		@$setting[1]->value = $title;
		@$setting[2]->value = $title;

		$page_image = '';
		$page_url = url('change-password');
		$site_logo = config('site.logo');
		if ($site_logo && File::exists(public_path('uploads/'.$site_logo)) ){
			$page_image = url('/uploads/'.$site_logo);
		}

		return view('frontend.change_password', compact('setting','page_url','page_image'));
	} 

	/* Change Password Post*/
	public function changePassword(Request $request)
	{
		$id = $request->id;
		$user = currentUserDetails();
		if ($id != $user->id) {
			\Session::flash('message','Sorry, Password is not updated! Please try again.');
			return redirect()->back();
		}

		$password = $request->password;

		$rules = array(
			'password' => 'min:8|confirmed'
		);

		$validator = Validator::make($request->all() , $rules);

		if ($validator->fails())
		{
			return Redirect::to('change-password/')->withErrors($validator)->withInput($request->all()); 
		}
		else
		{
				$updateUser = User::find($id);
				$updateUser->password = Hash::make($password);
				$updateUser->save();

				$fullname = $user->first_name.' '.$user->last_name;

				/*Password Change Email*/
				$data1 = array('fullname' => $fullname, 'password' => $password);

		        Mail::to($user->email)->send(new PasswordChangeMail($data1));

				return redirect()->back()->with('message', 'Password has been updated successfully.');

		}
	} 

	/* My Address Get*/
	public function my_address()
	{
		$user = currentUserDetails();
		$user_addresses = UserAddress::where('user_id',$user->id)->get();
		$setting = DB::table('edbg_settings')->whereIn('id', array(5, 6, 7))->get();
		$title = 'My Address';
		@$setting[0]->value = $title;
		@$setting[1]->value = $title;
		@$setting[2]->value = $title;

		$page_image = '';
		$page_url = url('my-address');
		$site_logo = config('site.logo');
		if ($site_logo && File::exists(public_path('uploads/'.$site_logo)) ){
			$page_image = url('/uploads/'.$site_logo);
		}
		return view('frontend.my_address', compact('user_addresses','setting','page_url','page_image'));
	} 

	/* My Address Get*/
	public function addAddress(Request $request)
	{
		$id = $request->id>0?$request->id:0;
		$user = currentUserDetails();
		$list = UserAddress::where('user_id',$user->id)->where('id',$id)->first();
		if ($id>0 && !$list) {
			\Session::flash('message','Sorry, Address is not updated! Please try again.');
			return redirect()->back();
		}
		$countries = Country::orderBy('name', 'asc')->get();
		$setting = DB::table('edbg_settings')->whereIn('id', array(5, 6, 7))->get();
		$title = 'My Address';
		@$setting[0]->value = $title;
		@$setting[1]->value = $title;
		@$setting[2]->value = $title;

		$page_image = '';
		$page_url = url('add-address');
		$site_logo = config('site.logo');
		if ($site_logo && File::exists(public_path('uploads/'.$site_logo)) ){
			$page_image = url('/uploads/'.$site_logo);
		}
		return view('frontend.add_address', compact('list','setting','page_url','page_image','countries'));
	} 

	/* Update Profile Post*/
	public function updateAddress(Request $request)
	{
		$id = $request->id;
		$user = Auth::user();
		$list = UserAddress::where('user_id',$user->id)->where('id',$id)->first();
		if ($id>0 && !$list) {
			\Session::flash('message','Sorry, Address is not updated! Please try again.');
			return redirect()->back();
		}

		$rules = array(
			//'id' => 'required|int',
			'name' => 'required|string|max:191',
			'address' => 'required|string|max:191',
			'zip_code' => 'required|string|max:191',
			'phone_number' => 'required|int|min:10',
		);

		$validator = Validator::make($request->all() , $rules);

		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator)->withInput(); 
		}
		else
		{
			$msg = 'Your address has been updated successfully.' ;
			if ($id<=0) {
				$list = new UserAddress();
				$msg = 'Your address has been added successfully.' ;
			}
			$list->user_id = $user->id;
			$list->name = $request->name;
			$list->address = $request->address;
			$list->address1 = $request->address1;
			$list->city = $request->city;
			$list->state = $request->state;
			$list->zip_code = $request->zip_code;
			$list->country = $request->country>0?$request->country:0;
			$list->phone_number = $request->phone_number;
			$list->save();

			\Session::flash('message',$msg);
			if ($request->redirect) {
				return Redirect::to($request->redirect);
			}
			return redirect()->back();

		}
	}

	/* Address Delete Post*/
	public function removeAddress(Request $request)
	{
		$id = $request->id;
		$user = Auth::user();
		$list = UserAddress::where('user_id',$user->id)->where('id',$id)->first();
		if (!$list) {
			\Session::flash('message','Sorry, Address is not deleted! Please try again.');
			return redirect()->back();
		}
		UserAddress::destroy($id);
		$msg = 'Your address has been deleted successfully.';

		\Session::flash('message',$msg);
		return redirect()->back();
	}

	/* Profile Delete Post*/
	public function profile_delete(Request $request)
	{
		$id = $request->id;
		$user = Auth::user();
		if ($id != $user->id) {
			\Session::flash('message','Sorry, Profile is not deleted! Please try again.');
			return redirect()->back();
		}
		$user->status = '2'; 
		$user->save();
			$msg = 'Your account has been deleted successfully.';

		/*DB::delete('delete from users where id = ?',[$id]);*/

		\Session::flash('message',$msg);
		return Redirect::to('logout/');
	}
}