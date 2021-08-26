@include('frontend.header')
<?php
$jobsearch = get_fields_value_where('pages',"posttype='jobsearch'",'id','desc');
?>
<!------ banner area start -------->

@foreach($extra_data as $val)
  @if($val->type==1)
<!------ banner area start -------->
<div class="subpagr_banner" style="background-image:url({{ asset('/uploads/'.$val->image) }});">
  <div class="container">
     @if($val->title)<h1>{!!$val->title!!}</h1>@endif
    
    <nav class="breadcrumb"> <a class="breadcrumb-item" href="{{ url('/') }}">home</a> <span class="breadcrumb-item active">{{$page->page_title}}</span> </nav>
  </div>
</div>
<!------ banner area stop --------> 
 @endif
@endforeach


<!------ main area start -------->

<div class="mainarea p-80">
  <div class="employment_area">
    <div class="container">
       <div class="row">
         <div class="col-lg-12">
            <div class="row">
              @if($jobsearch->count() > 0)
 @foreach($jobsearch as $val)
              <div class="col-lg-6 d-flex align-content-stretch">
            <div class="career_box">
              <a href="{{ url('/') }}/{!!$val->slug!!}">
              <h3>{!!$val->page_title!!}</h3>
              <h4>{!!$val->job_type!!}</h4>
              <p><strong>Location :</strong> {!!$val->location!!}</p>
              <p><strong>Job Description :</strong> {{substr(strip_tags($val->body),0,150)}}...</p>
              
            </a>
            </div>
          </div>


@endforeach
         @endif
          </div>
         </div>

       
    </div>
  </div>
</div>
</div>
<!------ main area stop --------> 


@include('frontend.footer')