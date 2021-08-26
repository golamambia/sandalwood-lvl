@include('frontend.header')
<?php
$location_type = get_fields_value_where('pages',"posttype='location'",'id','desc');
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
<!------ banner area stop --------> 

<!------ main area start -------->

<div class="mainarea p-80">
  <div class="employment_area locarea">
    <div class="container">
      @if($location_type->count() > 0)
 @foreach($location_type as $lt_val)
 <?php
$extra_data = get_fields_value_where('pages_extra',"page_id=".$lt_val->id,'id','desc');
?>

    <div class="locationarea mb-5">
      <div class="row">
        <div class="col-lg-5 pr-5 leftbox">
          <div class="locimg">
            @foreach($extra_data as $val)
            @if($val->type==1 && ($val->image))
            <img src="{{ asset('/uploads/'.$val->image) }}" alt=" ">
            @endif
            @endforeach
          </div>
        </div>
       <div class="col-lg-7 rightbox">
         <h2>
        @foreach($extra_data as $val)
            @if($val->type==1 && ($val->title))
     {!!$val->title!!}
        @endif
            @endforeach
            </h2>
         <div class="information_box"> <img src="{{ asset('frontend') }}/images/location-icon.png" alt="location icon" title="" class="img_icon">
              <h5>Location:</h5>
              <p>@foreach($extra_data as $val)
            @if($val->type==2 && ($val->body))
     {{strip_tags($val->body)}}
        @endif
            @endforeach</p>
            </div>
            <div class="information_box"> <img src="{{ asset('frontend') }}/images/phone-icon.png" alt="phone icon" title="" class="img_icon">
              <h5>Phone:</h5>
              <p> @foreach($extra_data as $val)
            @if($val->type==2 && ($val->title))
     {!!$val->title!!}
        @endif
            @endforeach</p>
            </div>
            
            <a href="{{ url('/') }}/{!!$lt_val->slug!!}" class="btn btn-primary">View more</a>
            
        </div> 
        
      </div>
      </div>
      
      @endforeach
      @endif


    </div>
  </div>
</div>
<!------ main area stop --------> 

@include('frontend.footer')