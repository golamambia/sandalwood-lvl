@include('frontend.header')

<!-- <section class="inner_banner_area" style="background-image: url({!! $page->bannerimage && File::exists(public_path('uploads/'.$page->bannerimage))?asset('/uploads/'.$page->bannerimage):asset('/frontend/images/inner-bg.jpg') !!});">
  <div class="container">
    <div class="inner_banner_contain">
      <h1><strong>{!! $page->page_title !!}</strong> </h1>
    </div>
  </div>
</section>  -->
@foreach($extra_data as $val)
  @if($val->type==1)
<!------- inner banner area start ------->
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
  @if($page->body)
  <div class="about_single">
    <div class="container">
      <div class="text-center">
        {!! $page->body !!}
      </div>
    </div>
  </div>
  @endif

  @foreach($extra_data as $val)
  @if($val->type!=1)
  <div class="about_single">
    <div class="container">
      <div class="text-center">
        @if($val->title)<h3>{!!$val->title!!}</h3>@endif
        {!!$val->body!!}
      </div>
    </div>
  </div>
  @endif
  @endforeach
</div>

@include('frontend.footer')