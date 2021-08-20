@include('frontend.header')

<!------ banner area start -------->
<div class="subpagr_banner" style="background-image:url({{ asset('frontend') }}/images/subbanner1.jpg);">
  <div class="container">
    <h1>Locations</h1>
    <nav class="breadcrumb"> <a class="breadcrumb-item" href="{{url('/')}}">home</a> <span class="breadcrumb-item active">Locations</span> </nav>
  </div>
</div>
<!------ banner area stop --------> 

<!------ main area start -------->

<div class="mainarea p-80">
  <div class="employment_area locarea">
    <div class="container">
    <div class="locationarea mb-5">
      <div class="row">
        <div class="col-lg-5 pr-5 leftbox">
          <div class="locimg"><img src="{{ asset('frontend') }}/images/location-img6.png" alt=" "></div>
        </div>
       <div class="col-lg-7 rightbox">
       <h2>Sandalwood <strong>Village</strong></h2>
         <div class="information_box"> <img src="{{ asset('frontend') }}/images/location-icon.png" alt="location icon" title="" class="img_icon">
              <h5>Location:</h5>
              <p>5485 Smiths Creek Rd. Kimball,<br>
                MI  48074</p>
            </div>
            <div class="information_box"> <img src="{{ asset('frontend') }}/images/phone-icon.png" alt="phone icon" title="" class="img_icon">
              <h5>Phone:</h5>
              <p>810-367-7192</p>
            </div>
            <a href="#" class="btn btn-primary">View more</a>
        </div> 
        
      </div>
      </div>
      <div class="locationarea mb-5">
      <div class="row">
        <div class="col-lg-5 pr-5 leftbox">
          <div class="locimg"><img src="{{ asset('frontend') }}/images/location-img7.png" alt=" "></div>
        </div>
       <div class="col-lg-7 rightbox">
       <h2>Sandalwood <strong>Village</strong></h2>
         <div class="information_box"> <img src="{{ asset('frontend') }}/images/location-icon.png" alt="location icon" title="" class="img_icon">
              <h5>Location:</h5>
              <p>5485 Smiths Creek Rd. Kimball,<br>
                MI  48074</p>
            </div>
            <div class="information_box"> <img src="{{ asset('frontend') }}/images/phone-icon.png" alt="phone icon" title="" class="img_icon">
              <h5>Phone:</h5>
              <p>810-367-7192</p>
            </div>
            <a href="#" class="btn btn-primary">View more</a>
        </div> 
        
      </div>
      </div>
      <div class="locationarea mb-5">
      <div class="row">
        <div class="col-lg-5 pr-5 leftbox">
          <div class="locimg"><img src="{{ asset('frontend') }}/images/location-img8.png" alt=" "></div>
        </div>
       <div class="col-lg-7 rightbox">
       <h2>Sandalwood <strong>Village</strong></h2>
         <div class="information_box"> <img src="{{ asset('frontend') }}/images/location-icon.png" alt="location icon" title="" class="img_icon">
              <h5>Location:</h5>
              <p>5485 Smiths Creek Rd. Kimball,<br>
                MI  48074</p>
            </div>
            <div class="information_box"> <img src="{{ asset('frontend') }}/images/phone-icon.png" alt="phone icon" title="" class="img_icon">
              <h5>Phone:</h5>
              <p>810-367-7192</p>
            </div>
            <a href="#" class="btn btn-primary">View more</a>
        </div> 
        
      </div>
      </div>
    </div>
  </div>
</div>
<!------ main area stop --------> 

@include('frontend.footer')