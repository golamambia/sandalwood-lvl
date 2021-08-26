@include('frontend.header')
<?php
$location = get_fields_value_where('pages',"page_template=2",'id','desc');

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
  <div class="contact_page">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="finding_box">
            <h3>Where to <strong>Begin</strong></h3>
            <h4>Finding the Right Option</h4>
            <ul>
              <li>What Level of Care Do I Need?</li>
              <li>When is it the Right Time for Senior Living?</li>
              <li>How Do I Find the Right Senior Living Community?</li>
            </ul>
            <h4>Discussion</h4>
            <h4>Prepare for Move</h4>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row">
            <div class="col-lg-6">
              <div class="service_img_box mb-5"> <img src="{{ asset('frontend') }}/images/begin1.png" alt="service" title=""> </div>
            </div>
            <div class="col-lg-6">
              <div class="contact_pagetop mb-4 pt-5">
                <h2 class="text-left">Finding <span>Right Option</span></h2>
                <p class="text-left w-100 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempus, lectus non ornare suscipit, nisl urna vulputate sapien, nec suscipit velit felis quis sem. Proin interdum, sem eu convallis cursus, ligula lacus efficitur tellus, ut tempor ipsum velit at metus. Aenean sed felis sed purus laoreet sagittis at sed dui.</p>
              </div>
            </div>
          </div>
          <div class="contact_pagetop mb-4 pt-5">
            <h2 class="text-left">What Level of <span>Care Do I Need?</span></h2>
            <p class="text-left w-100 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus, elit et eleifend aliquet, nunc purus semper dui, vel iaculis nisi urna in mi. In maximus faucibus massa at convallis. Sed vestibulum ut lacus eget commodo. </p>
            <p class="text-left w-100 mb-2">Curabitur vitae est justo. Nunc in auctor magna. Nullam pulvinar auctor massa ut interdum. Aenean ullamcorper in mi ac ornare. Morbi at leo metus. Etiam et nisl tincidunt, commodo orci mollis, convallis massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent a condimentum leo. Integer a vestibulum massa. Fusce placerat eu justo at cursus. Fusce vulputate commodo consectetur.</p>
          </div>
          <div class="contact_pagetop mb-4 pt-5">
            <h2 class="text-left">When is the Right Time for<br/>
              <span>Senior Living?</span></h2>
            <p class="text-left w-100 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus, elit et eleifend aliquet, nunc purus semper dui, vel iaculis nisi urna in mi. In maximus faucibus massa at convallis. Sed vestibulum ut lacus eget commodo. </p>
            <div class="row">
              <div class="col-lg-6">
                <p class="text-left w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus, elit et eleifend aliquet, nunc purus semper dui, vel iaculis nisi urna in mi. In maximus faucibus massa at convallis. Sed vestibulum ut lacus eget commodo. </p>
                <p class="text-left w-100 mb-2">Curabitur vitae est justo. Nunc in auctor magna. Nullam pulvinar auctor massa ut interdum. Aenean ullamcorper in mi ac ornare. Morbi at leo metus. Etiam et nisl tincidunt, commodo orci mollis, convallis massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent a condimentum leo.</p>
              </div>
              <div class="col-lg-6"> <img src="{{ asset('frontend') }}/images/service6.png" alt="service image" title="" /> </div>
            </div>
          </div>
          <div class="contact_pagetop mb-4 pt-5">
            <h2 class="text-left">How Do I Find the Right <span>Senior Living<br/>
              Community?</span></h2>
            <p class="text-left w-100 mb-2">Curabitur vitae est justo. Nunc in auctor magna. Nullam pulvinar auctor massa ut interdum. Aenean ullamcorper in mi ac ornare. Morbi at leo metus. Etiam et nisl tincidunt, commodo orci mollis, convallis massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent a condimentum leo. Integer a vestibulum massa. Fusce placerat eu justo at cursus. Fusce vulputate commodo consectetur.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!------ main area stop --------> 

@include('frontend.footer')