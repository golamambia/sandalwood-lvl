@include('admin.header')

@include('admin.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Service
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/admin/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Edit Service</li>
    </ol>
  </section>

  
  <!-- Main content -->
  <section class="content">
    <div class="row">

      <div class="col-xm-12 col-sm-12 col-md-12">

        <div class="box box-primary">
          <div class="box-header with-border">
            <!--<h3 class="box-title">Quick Example</h3>-->
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ url('/admin/service/update/') }}"  method="post" enctype="multipart/form-data" class="formvalidation">

            @csrf

            <input type="hidden" name="id" value="{{$list->id}}">

            <div class="box-body">

              @if($errors->any())   
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                @foreach ($errors->all() as $error)
                {{ $error }}<br>
                @endforeach
              </div>
              @endif

              @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Success</h4>
                Service has been updated successfully.
              </div>
              @endif

              @if (session()->has('file_destroy'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Success</h4>
                {!! Session::get('file_destroy')!!}
              </div>
              @endif

              <div class="form-group clearfix">
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name" data-validation-engine="validate[required]" placeholder="Enter ..." value="{{ $list->name }}">
                </div>
              </div> 

              <div class="form-group clearfix">
                <label class="col-sm-2 control-label">Designation</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="designation" id="designation" data-validation-engine="validate[required]" placeholder="Enter ..." value="{{ $list->designation }}">
                </div>
              </div> 

              <div class="form-group clearfix">
                <label class="col-sm-2 control-label">Rank</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="rank" id="rank" data-validation-engine="validate[custom[integer]]" placeholder="Enter ..." value="{{ $list->rank }}">
                </div>
              </div>

              <div class="form-group clearfix">
                <label class="col-sm-2 control-label">Image</label>
                <div class="col-sm-10">
                  <input type="file" name="image" data-validation-engine="validate[,custom[validateMIME[image/jpeg|image/jpg|image/png|image/gif|image/svg]]]" >
                  Mime Type: jpeg,png,jpg,gif,svg, Max image upload size 2 Mb<br>
                  <div class="clearfix">
                    <?php if($list->image && File::exists(public_path('uploads/'.$list->image)) ) { ?>
                      <img src="{{ asset('/uploads/'.$list->image) }}" style="margin: 10px 0 0 0;max-width: 200px;"> <a href="{{url('/admin/service/file-destroy/'.$list->id)}}"><i class="fa fa-fw fa-close"></i></a>
                    <?php } ?>
                  </div>

                </div>
              </div>

              <div class="form-group clearfix">
                <label class="col-sm-2 control-label">Content</label>
                <div class="col-sm-10">
                  <textarea name="body" class="ckeditor" placeholder="Enter ...">{{ $list->body }}</textarea>
                </div>
              </div>

              <div class="form-group clearfix">
                <label class="col-sm-2 control-label">Category</label>
                <div class="col-sm-4">
                  <select name="category_id" id="category_id" class="form-control">  
                  <option value="">Select One</option>               
                    @foreach($category_list as $cat_list)
                    <option value="{{$cat_list->id}}" {!!$list->category_id==$cat_list->id?'selected':''!!}>{{ $cat_list->name }}</option>
                    @endforeach
                  </select>
                </div>
                <label class="col-sm-2 control-label">Status</label>
                <div class="col-sm-4">
                  <select name="status" id="status" class="form-control">
                    <option value="1" {!!$list->status=='1'?'selected':''!!}>Active</option>
                    <option value="0" {!!$list->status=='0'?'selected':''!!}>Inactive</option>
                  </select>
                </div>
              </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
              </div>

            </form>
          </div>
          <!-- /.box -->

        </div>


      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->


  @include('admin.footer')
