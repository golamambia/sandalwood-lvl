@include('frontend.header')

<?php
$location_type = get_fields_value_where('pages',"posttype='location'",'id','desc');
?>

<!------ banner area start -------->
<div class="home-slider">
  <div class="cycle-slideshow home-slideshow" data-cycle-slides="&gt; div" data-cycle-pager=".home-pager" data-cycle-timeout="5000" data-cycle-prev="#HomePrev" data-cycle-next="#HomeNext">
    @foreach($extra_data as $val)
    @if($val->type==1 && $val->image && File::exists(public_path('uploads/'.$val->image)))
    
    <div class="slide" style="background-image:url({{ asset('/uploads/'.$val->image) }});">
      <div class="caption">
        <div class="container">
          <div class="con">
            <h2>{!!$val->title!!}</h2>
            <p>{!!$val->sub_title!!}</p>
            <a href="{!!$val->btn_url!!}" class="btn btn-primary">{!!$val->btn_text?$val->btn_text:'Contact us'!!}</a> </div>
        </div>
      </div>
    </div>
     @endif
    @endforeach



  </div>
</div>
<!------ banner area stop --------> 
<!-------About Us start  ------->
<div class="aboutus_area">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
       
       
        
    
    
        <div class="aboutus_thumble">
         @foreach($extra_data as $val) 
          @if($val->type==2 && $val->image && File::exists(public_path('uploads/'.$val->image)))
          <img src="{{ asset('/uploads/'.$val->image) }}" alt="#">
           @endif
              @endforeach
            @foreach($extra_data as $val)
           @if($val->type==2 && $val->title)
          <div class="since">
            <h5><span><img src="{{ asset('frontend') }}/images/about_icon3.png" alt=" "></span>{!!$val->title!!}</h5>
          </div>
          @endif
             @endforeach
        </div>
 
 
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="aboutus_contantbox">
           @foreach($extra_data as $val)
           @if($val->type==3)
          <h2>{!!$val->title!!}</h2>
          {!!$val->body!!}
           @endif
             @endforeach
             @foreach($extra_data as $val)
           @if($val->type==4)
          <div class="whybox">
            <div class="whyicon"><img src="{{ asset('/uploads/'.$val->image) }}" alt=" "></div>
            <h4>{!!$val->title!!}</h4>
            <p>{!!$val->sub_title!!}</p>
          </div>
         @endif
             @endforeach

        </div>
      </div>
    </div>
  </div>
</div>
<!-------About Us stop  -------> 

<!------- Higher Standard start  ------->
<div class="ourservices_area p-8">
  <div class="container">
       @foreach($extra_data as $val)
           @if($val->type==5)
    <div class="d-flex justify-content-between">
      <div class="d-block">
        <h2>{!!$val->title!!}</h2>
      </div>
      {!!$val->body!!}
    </div>
    @endif
             @endforeach
    <div class="owl-carousel service_carousel" id="servicecarousel">
       @foreach($extra_data as $val)
           @if($val->type==6)
      <div class="ourservices_box">
             
       <a href="#">
        <div class="ourservices_thumble d-flex"> <img src="{{ asset('/uploads/'.$val->image) }}" alt="#">
          <div class="overbox">
            <div class="icon" style="background-image: url({{ asset('/uploads/'.$val->image2) }});"></div>
            <h4>{!!$val->title!!}</h4>
            <p>{!!$val->sub_title!!}</p>
          </div>
        </div>
        </a> </div>
        @endif
             @endforeach
    
    </div>
  </div>
</div>
<!------- Higher Standard start  -------> 

<!------- Book an Appointment start  ------->
<div class="bookan" style="background:url({{ asset('frontend') }}/images/bookanbg.jpg)">
  <div class="container">
     @foreach($extra_data as $val)
           @if($val->type==7)
    <h2>{!!$val->title!!}</h2>
  {!!$val->body!!} 
  @endif
             @endforeach
    

    <div class="text-center"> 
 @foreach($extra_data as $val)
           @if($val->type==7 && $val->btn_text)
      <a href="/contact-us" class="callus">{!!$val->btn_text!!}</a>
 @endif
  @if($val->type==8 && $val->btn_text)
       <a href="/contact-us" class="callus">{!!$val->btn_text!!}</a>
 @endif
             @endforeach
        </div>
  </div>
</div>
<!------- Book an Appointment stop  -------> 

<!------- Why Choose Us start  ------->
<div class="whyus">
  <div class="container">
     @foreach($extra_data as $val)
           @if($val->type==8)
     <h2>{!!$val->title!!}</h2>
  {!!$val->body!!} 
  @endif
             @endforeach
    <div class="row">
      <div class="col-lg-7">
        @foreach($extra_data as $val)
           @if($val->type==9)
        <div class="whybox">
          <div class="whyicon"><img src="{{ asset('/uploads/'.$val->image) }}" alt=" "></div>
          <h4>{!!$val->title!!}</h4>
          <p>{!!$val->sub_title!!}</p>
        </div>
          @endif
             @endforeach


      </div>
      <div class="col-lg-5">
        <div class="story_video"> 
                  @foreach($extra_data as $val)
           @if($val->type==10)<img src="{{ asset('frontend') }}/images/videoimg.jpg" alt="video" title=""> 
           <a  data-fancybox href="{!!$val->btn_url!!}" class="video-play-button"><span></span></a>
 @endif
             @endforeach
            </div>
      </div>
    </div>
  </div>
</div>
<!------- Why Choose Us stop  -------> 

<!------- What we do start  ------->
<div class="Whatwedo_area p-8">
  <div class="container">
    @foreach($extra_data as $val)
           @if($val->type==10)
    <h2>{!!$val->title!!}</h2>
    <p>{!!$val->sub_title!!}</p>
    @endif
             @endforeach
              @foreach($extra_data2 as $val)
           @if($val->type==2)
    <div class="Whatwedo_box row">
      <div class="col-lg-6 col-md-6 Whatwedoimg d-flex flex-wrap align-content-stretch">
        <div class="Whatwedo_thumble d-flex"> <img src="{{ asset('/uploads/'.$val->image) }}"> </div>
      </div>
      <div class="col-lg-6 col-md-6 Whatwedocontent d-flex flex-wrap align-content-stretch align-items-center">
        <div class="Whatwedo_textbox">
          <h3>{{strip_tags($val->title)}}</h3>
          {!!$val->body!!}
           @if($val->btn_text)<a href="{{url('/service/'.$val->id)}}" class="more">{!!$val->btn_text?$val->btn_text:'read more'!!}</a>@endif </div>
      </div>
    </div>
    @endif
             @endforeach
  
  </div>
</div>
<!------- What we do stop  -------> 
<!------- Clients Say start -------> 

<div class="clientsay_area p-8">
  <div class="container">
    @foreach($extra_data as $val)
           @if($val->type==10)
    <h2>{!!$val->title!!}</h2>
    <p>{!!$val->sub_title!!}</p>
     @endif
             @endforeach
  </div>
  <div class="row m-0">
      
      
        <div class="client_rightbox">
         
          
           <div class="owl-carousel client-carousel" id="clientslider">
    @if($location_type->count() > 0)
 @foreach($location_type as $lt_val)
 <?php
$extra_datanw = get_fields_value_where('pages_extra',"page_id=".$lt_val->id,'id','desc');
?>
            <a href="{{ url('/') }}/{!!$lt_val->slug!!}">
            <div class="clientbox">
              <div class="locationimg">
                 @foreach($extra_datanw as $val)
            @if($val->type==1 && ($val->image))
            <img src="{{ asset('/uploads/'.$val->image) }}" alt=" ">
            @endif
            @endforeach
              <h4>
        @foreach($extra_datanw as $val)
            @if($val->type==1 && ($val->title))
     {!!$val->title!!}
        @endif
            @endforeach
            </h4>
              </div>
            </div>
          </a>

             @endforeach
      @endif
          </div>
        
      </div>
    </div>
</div>

<!------- Clients Say stop -------> 
<!------- Our Latest News start  ------->
<div class="latest pt-0">
  <div class="container">
    @foreach($extra_data as $val)
           @if($val->type==12)
    <h2>{!!$val->title!!}</h2>
   {!!$val->body!!}
    @endif
              @endforeach
    <div class="row">
      @foreach($extra_data as $val)
           @if($val->type==13)
      <div class="col-lg-4 col-md-4">
        <div class="newbox">
          <div class="newimg"><img src="{{ asset('/uploads/'.$val->image) }}" alt=" ">
            <div class="clock"><i class="fa fa-clock-o" aria-hidden="true"></i>{!!$val->sub_title!!}</div>
          </div>
          <div class="ntxt">
            <h4><a href="javascript:void(0)">{!!$val->title!!}</a></h4>
            {!!$val->body!!}
          </div>
        </div>
      </div>
@endif
              @endforeach
      


    </div>
  </div>
</div>
<!------- Our Latest News stop  -------> 

<!------- How can we help start  ------->
<div class="wehelp">
  <div class="container">
    <div class="row shadow">
      <div class=" col-lg-6 p-0">
        <div class="map">
          @foreach($extra_data as $val)
           @if($val->type==14)
          <iframe src="{!!$val->sub_title!!}" width="100%" height="525px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
@endif
              @endforeach
        </div>
      </div>
      <div class="col-lg-6 p-5">
        @foreach($extra_data as $val)
           @if($val->type==14)
        <h2>{!!$val->title!!}</h2>
        @endif
              @endforeach
               @if($errors->any())   
            <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            @foreach ($errors->all() as $error)
            {{ $error }}<br>
            @endforeach
            </div>
            @endif
       <form method="POST" action="{{ url('homeform') }}" class="customvalidation">
           @csrf
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1"> Pricing & Availability </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked>
            <label class="form-check-label" for="exampleRadios2"> Schedule a Tour </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option1" checked>
            <label class="form-check-label" for="exampleRadios3"> Employment </label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control numeric_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name" data-validation-engine="validate[required]" name="name" maxlength="10" value="{{old('name')}}">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email" data-validation-engine="validate[required]" name="email" value="{{old('email')}}">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Phone" maxlength="10" data-validation-engine="validate[required]" name="phone" value="{{old('phone')}}">
          </div>
          <button type="submit" class="btn btn-primary">Get Started</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!------- How can we help stop  -------> 

@section('more-scripts')

<script>
$(document).ready(function() { 
});
</script>
@stop

@include('frontend.footer')

