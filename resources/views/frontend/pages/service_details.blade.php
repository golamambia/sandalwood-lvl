@include('frontend.header')
<?php
$location = get_fields_value_where('pages',"page_template=3",'id','desc');

?>
@foreach($location as $lval)
<?php

$location_extra = get_fields_value_where('pages_extra',"page_id=".$lval->id,'id','desc');
?>
@foreach($location_extra as $val)
  @if($val->type==1)
<!------ banner area start -------->
<div class="subpagr_banner" style="background-image:url({{ asset('/uploads/'.$val->image) }});">
  <div class="container">
    <h1>{!!$val->title!!}</h1>
    <nav class="breadcrumb"> <a class="breadcrumb-item" href="{{ url('/') }}">home</a> <a class="breadcrumb-item" href="{{ url('/') }}/{!!$lval->slug!!}">{!!$page->page_title!!}</a> <span class="breadcrumb-item active">{!!$val->title!!}</span> </nav>
  </div>
</div>
 @endif
 @endforeach
@endforeach
<!------ banner area stop --------> 

<!------ main area start -------->

<div class="mainarea p-80">
  <div class="location_img_area">
    <div class="container">
      <div class="row mb-4">
        <div class="col-lg-12">
          @foreach($extra_data as $val)
            @if($val->type==2 && ($val->image))
          <div class="location_big_img"> <img src="{{ asset('/uploads/'.$val->image) }}" alt="location image" title="" /> </div>
           @endif
            @endforeach
        </div>
       
      </div>
      <div class="location_heading">
        @foreach($extra_data as $val)
            @if($val->type==2 && ($val->title))
        <h2>{!!$val->title!!}</h2>
         @endif
            @endforeach
     <!--   <h3><img src="{{ asset('frontend') }}/images/location-icon.png" alt="location icon" title="" class="location-icon" /><strong>Location:</strong> @foreach($extra_data as $val)-->
     <!--       @if($val->type==2 && ($val->body))-->
     <!--{{strip_tags($val->body)}}-->
     <!--   @endif-->
     <!--       @endforeach</h3>-->
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="overview_area box_shadow">
            <h3>Description:</h3>
            @foreach($extra_data as $val)
            @if($val->type==2 && ($val->body))
        {!!$val->body!!}
         @endif
            @endforeach
          </div>
         
        </div>

        
      </div>
    </div>
  </div>
</div>
<!------ main area stop --------> 

@include('frontend.footer')