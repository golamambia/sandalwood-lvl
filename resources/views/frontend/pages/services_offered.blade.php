@include('frontend.header')


@foreach($extra_data as $val)
  @if($val->type==1)
<!------ banner area start -------->
<div class="subpagr_banner" style="background-image:url({{ asset('frontend') }}/images/subbanner1.jpg);">
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
  <div class="contact_page">
    <div class="container">
      
    @foreach($extra_data as $val)
               @if($val->type==2 && $val->image && File::exists(public_path('uploads/'.$val->image)))
      <div class="row service_area">
        <div class="col-lg-6 col-md-6 service_box_img">
          <div class="service_img_box mb-5"> <img src="{{ asset('/uploads/'.$val->image) }}" alt="service" title="" /> </div>
        </div>
        <div class="col-lg-6 col-md-6 service_box">
          <div class="contact_pagetop mb-4 pt-5 pl-5">
            <h2 class="text-left">{!!$val->title!!}</h2>
            {!!$val->body!!}
            
             @if($val->btn_text)<a href="{!!$val->btn_url!!}" class="more">{!!$val->btn_text?$val->btn_text:'read more'!!}</a>@endif
          </div>
        </div>
      </div>
      @endif
              @endforeach
      
      
    </div>
  </div>
</div>
<!------ main area stop --------> 


@include('frontend.footer')