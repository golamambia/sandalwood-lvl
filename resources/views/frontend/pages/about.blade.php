@include('frontend.header')

 <!------- inner banner area start ------->
    @foreach($extra_data as $val)
    @if($val->type==1)

<section class="inner_banner_area" style="background-image: url({{ asset('/uploads/'.$val->image) }});">
        <div class="container">
            <div class="inner_banner_contain">
                @if($val->title)<h1>{!!$val->title!!}</h1>@endif
                {!!$val->body!!}
                @if($val->btn_url)<a href="{!!$val->btn_url!!}" class="btn btn-custom mt-4">{!!$val->btn_text?$val->btn_text:'contact Us'!!}</a>@endif
            </div>
        </div>
 </section>
    @endif
    @endforeach

<div class="mainbox p-8">
@foreach($extra_data as $val)
  @if($val->type==2)
  <div class="innerabout_us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="innerabout_thumble">
          	@if($val->image && File::exists(public_path('uploads/'.$val->image)) )
            <img src="{{ asset('/uploads/'.$val->image) }}" alt="">@endif
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="innerabout_contantbox">
            <h3>{!!$val->title!!} <strong>{!!$val->sub_title!!}</strong></h3>
            {!!$val->body!!}
          </div>
        </div>
      </div>
    </div>
  </div>
 @endif
@endforeach


  <div class="ourglobalreach_area p-8">
    <div class="container">
      <div class="text-center">
      	@foreach($extra_data as $val)

      @if($val->type==3)
        <h3>{!!$val->title!!} <strong>{!!$val->sub_title!!}</strong></h3>
        {!!$val->body!!}
        @endif
		@endforeach

        <div class="row">
    		@foreach($extra_data as $val)
      		@if($val->type==4)
          <div class="col-lg-4 col-md-4 d-flex align-content-stretch">
            <div class="serviceslist_box">
            	@if($val->image && File::exists(public_path('uploads/'.$val->image)) )
             <div class="services_icon" style="background-image: url({{ asset('/uploads/'.$val->image) }});"></div>@endif
            @if($val->title)<h4>{!!$val->title!!}</h4>@endif
				{!!$val->body!!}
				<div class="shap">
              <img src="{{ asset('/frontend/images/workaffterbg.png') }}" alt="">
            </div>
             </div>
          </div>
	@endif
    @endforeach

        </div>
      </div>
    </div>
  </div>

<div class="Whatwedo_area opportunityarea p-8 pt-0">
 <div class="container">

    		@foreach($extra_data as $val)
      		@if($val->type==5)
    <div class="Whatwedo_box row">
     <div class="col-lg-6 col-md-6 Whatwedoimg d-flex flex-wrap align-content-stretch">
         <div class="Whatwedo_thumble d-flex">
           @if($val->image && File::exists(public_path('uploads/'.$val->image)) )
            <img src="{{ asset('/uploads/'.$val->image) }}" alt="">@endif
           <div class="triangle">
             <img src="{{ asset('/frontend/images/bg2.png') }}" alt="">
           </div>
          </div>
       </div>
       <div class="col-lg-6 col-md-6 Whatwedocontent d-flex flex-wrap align-content-stretch align-items-center">
         <div class="Whatwedo_textbox">
          <h3>{!!$val->title!!}<strong>{!!$val->sub_title!!}</strong></h3>
           {!!$val->body!!}
         </div>
       </div>
   </div>
	@endif
    @endforeach
  

 </div>
</div>


<div class="Whychoose_area p-8 pt-4">
  <div class="container">
    <div class="text-center mb-4">
      @foreach($extra_data as $val)
      @if($val->type==6)
        <h3>{!!$val->title!!} <strong>{!!$val->sub_title!!}</strong></h3>
        {!!$val->body!!}
        @endif
		@endforeach
    </div>

    <div class="row row-8 howitworktotalbox">
    		@foreach($extra_data as $val)
      		@if($val->type==7)
       <div class="col-lg-3 col-md-6 col-sm-6 howitwork d-flex flex-wrap align-content-stretch">
         <div class="howitwork_box">
           @if($val->image && File::exists(public_path('uploads/'.$val->image)) )
             <div class="howitwork_icon" style="background-image: url({{ asset('/uploads/'.$val->image) }});"></div>@endif
           <h3>{!!$val->title!!}</h3>
           {!!$val->body!!}
         </div>
       </div>
       @endif
    @endforeach
     </div>
  </div>
</div>



	@foreach($extra_data as $val)

      @if($val->type==8)
  <div class="Workwithus_area inneradd">
  <div class="container">
  	@if($val->image && File::exists(public_path('uploads/'.$val->image)) )
    <div class="Workwithus_box" style="background-image: url({{ asset('/uploads/'.$val->image) }});">@endif
      <div class="Workwithus_innerbox">
        
        <h4>{!!$val->title!!}</h4>
           {!!$val->body!!}
            @if($val->btn_url)<a href="{!!$val->btn_url!!}" class="btn btn-custom mt-4">{!!$val->btn_text?$val->btn_text:'contact Us'!!}</a>@endif
         
      </div>
    </div>
  </div>
</div>

@endif
@endforeach

</div>

@include('frontend.footer')

