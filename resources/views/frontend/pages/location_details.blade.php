@include('frontend.header')
<?php
$location = get_fields_value_where('pages',"page_template=4",'id','desc');

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
    <h1>{{$page->page_title}}</h1>
    <nav class="breadcrumb"> <a class="breadcrumb-item" href="{{ url('/') }}">home</a> <a class="breadcrumb-item" href="{{ url('/') }}/{!!$lval->slug!!}">{!!$lval->page_title!!}</a> <span class="breadcrumb-item active">{{$page->page_title}}</span> </nav>
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
        <div class="col-lg-6">
          @foreach($extra_data as $val)
            @if($val->type==1 && ($val->image))
          <div class="location_big_img"> <img src="{{ asset('/uploads/'.$val->image) }}" alt="location image" title="" /> </div>
           @endif
            @endforeach
        </div>
        <div class="col-lg-6">
          <div class="row">
            @foreach($extra_data as $val)
            @if($val->type==4 && ($val->image))
            <div class="col-lg-6 col-md-6">
              <div class="location_small_img">
               <img src="{{ asset('/uploads/'.$val->image) }}" alt="location image" title="" />

                </div>
            </div>
             @endif
            @endforeach
           
          </div>
        </div>
      </div>
      <div class="location_heading">
        @foreach($extra_data as $val)
            @if($val->type==1 && ($val->title))
        <h2>{!!$val->title!!}</h2>
         @endif
            @endforeach
        <h3><img src="{{ asset('frontend') }}/images/location-icon.png" alt="location icon" title="" class="location-icon" /><strong>Location:</strong> @foreach($extra_data as $val)
            @if($val->type==2 && ($val->body))
     {{strip_tags($val->body)}}
        @endif
            @endforeach</h3>
      </div>
      <div class="row">
        <div class="col-lg-8">
         
          <div class="overview_area box_shadow">
            <h3>Description:</h3>
            @foreach($extra_data as $val)
            @if($val->type==1 && ($val->body))
        {!!$val->body!!}
         @endif
            @endforeach
          </div>
          <div class="overview_area box_shadow">
            <h3>Details:</h3>
            <div class="row">
              @foreach($extra_data as $val)
            @if($val->type==3 )
              <div class="col-lg-4">
                <p>{!!$val->title!!}</p>
                <p>{!!$val->sub_title!!}</p>
              </div>
              @endif
            @endforeach
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="overview_area box_shadow">
            <h3>Property Information:</h3>
            <div class="information_box"> <img src="{{ asset('frontend') }}/images/location-icon.png" alt="location icon" title="" class="img_icon" />
              <h5>Location:</h5>
              <p>@foreach($extra_data as $val)
            @if($val->type==2 && ($val->body))
     {{strip_tags($val->body)}}
        @endif
            @endforeach</p>
            </div>
            <div class="information_box"> <img src="{{ asset('frontend') }}/images/phone-icon.png" alt="phone icon" title="" class="img_icon" />
              <h5>Phone:</h5>
              <p> @foreach($extra_data as $val)
            @if($val->type==2 && ($val->title))
     {!!$val->title!!}
        @endif
            @endforeach</p>
            </div>
            <div class="information_box"> <img src="{{ asset('frontend') }}/images/fax-icon.png" alt="fax icon" title="" class="img_icon" />
              <h5>Fax:</h5>
              <p>@foreach($extra_data as $val)
            @if($val->type==2 && ($val->sub_title))
     {!!$val->sub_title!!}
        @endif
            @endforeach</p>
            </div>
            <div class="information_box"> <img src="{{ asset('frontend') }}/images/mail-icon.png" alt="mail icon" title="" class="img_icon" />
              <h5>Email:</h5>
              <p>@foreach($extra_data as $val)
            @if($val->type==2 && ($val->btn_text))
     {!!$val->btn_text!!}
        @endif
            @endforeach</p>
            </div>
            <div class="information_box"> <img src="{{ asset('frontend') }}/images/web.png" alt="web" title="" class="img_icon" />
              <h5>Website:</h5>
              <p>@foreach($extra_data as $val)
            @if($val->type==2 && ($val->btn_url))
     {!!$val->btn_url!!}
        @endif
            @endforeach</p>
            </div>
            <button type="submit" class="btn btn-primary w-100">Open In Google Maps</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
<!------ main area stop --------> 

@include('frontend.footer')