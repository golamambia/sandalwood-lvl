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
  <div class="employment_area">
    <div class="container">
      <div class="row">
      	 @foreach($extra_data as $val)
               @if($val->type==2 && $val->image && File::exists(public_path('uploads/'.$val->image)))
        <div class="col-lg-6">
          <div class="employment_img_box"><img src="{{ asset('/uploads/'.$val->image) }}" alt="employment" title="" /></div>
        </div>
        <div class="col-lg-6">
          <div class="employment_contain_box">
            <h2>{!!$val->title!!}</h2>
           {!!$val->body!!}
          </div>
        </div>
@endif
              @endforeach

        <div class="col-lg-12">
          <div class="employment_contain_box">
 @foreach($extra_data as $val)
               @if($val->type==3)
            <h3>{!!$val->title!!}</h3>
            @endif
              @endforeach
            <div class="row">
              <div class="col-lg-12">
                <ul>
@foreach($extra_data as $val)
 @if($val->type==4)
                  <li>{!!$val->title!!}</li>
                 
@endif
              @endforeach
                </ul>
              </div>
              
            </div>
            <div class="w-100 mt-4">
            	 @foreach($extra_data as $val)
               @if($val->type==3 && $val->btn_text)
              <button class="btn-application">{!!$val->btn_text?$val->btn_text:'Employment Application'!!}</button>
              @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!------ main area stop --------> 

@include('frontend.footer')