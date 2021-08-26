@include('frontend.header')
<?php
$jobserach = get_fields_value_where('pages',"page_template=9",'id','desc');
?>
<!------ banner area start -------->

@foreach($jobserach as $val)
<?php

$location_extra = get_fields_value_where('pages_extra',"page_id=".$val->id,'id','desc');
?>
@foreach($location_extra as $eval)
  @if($eval->type==1)
<!------ banner area start -------->
<div class="subpagr_banner" style="background-image:url({{ asset('/uploads/'.$eval->image) }});">
  @endif
  @endforeach
  <div class="container">
     @if($val->page_title)<h1>{!!$val->page_title!!}</h1>@endif
    
    <nav class="breadcrumb"> <a class="breadcrumb-item" href="{{ url('/') }}">home</a> <span class="breadcrumb-item active">{{$page->page_title}}</span> </nav>
  </div>
</div>
<!------ banner area stop --------> 

@endforeach


<!------ main area start -------->

<div class="mainarea p-80">
  <div class="employment_area">
    <div class="container">
       <div class="row">
         <div class="col-lg-8">
            <div class="career_box jobsearchdetails">
              <a href="/jobs-search" class="btn btn-link"> < Return to search results</a>
             
        <h3>{!!$page->page_title!!}</h3>
         
            {!!$page->body!!}
               
            </div>
        
           
         </div>

         <div class="col-lg-4">
           <div class="applynow_area contact_pageformbox">
             <h5>Apply jobs</h5>
            @if($errors->any())   
            <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            @foreach ($errors->all() as $error)
            {{ $error }}<br>
            @endforeach
            </div>
            @endif
        <form method="POST" action="{{ url('careerform') }}" class="customvalidation" enctype="multipart/form-data">
           @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name" data-validation-engine="validate[required]" value="{{old('name')}}">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="email" data-validation-engine="validate[required]" value="{{old('email')}}">
                </div>
                <div class="form-group">
                  <label>Phone no</label>
                  <input type="text" class="form-control numeric_input" name="phone" placeholder="Phone no" data-validation-engine="validate[required]" maxlength="10" value="{{old('phone')}}">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Upload your cv</label>
                  <input type="file" name="resume" class="form-control-file form-control" id="exampleFormControlFile1" data-validation-engine="validate[required]">
                </div>
                <input type="submit" value="Apply Now" class="btn btn-primary" name="">
             </form>
           </div>
         </div>
       
    </div>
  </div>
</div>
</div>
<!------ main area stop --------> 


@include('frontend.footer')