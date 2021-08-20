@include('frontend.header')

<?php
$testimonials = get_fields_value_where('gs_testimonial',"status='1'",'rank','asc');
?>

<!------ banner area start -------->
<div class="home-slider">
  <div class="cycle-slideshow home-slideshow" data-cycle-slides="&gt; div" data-cycle-pager=".home-pager" data-cycle-timeout="5000" data-cycle-prev="#HomePrev" data-cycle-next="#HomeNext">
    <div class="slide" style="background-image:url({{ asset('frontend') }}/images/banner.jpg);">
      <div class="caption">
        <div class="container">
          <div class="con">
            <h2>Experience Our <br>
              Approch to <span>Senior Living <br>
              & Support</span></h2>
            <p>Assistance with daily tasks in group or shared living arrangements to help individuals to live as autonomously as possible.</p>
            <a href="#" class="btn btn-primary">contact Us</a> </div>
        </div>
      </div>
    </div>
    <div class="slide" style="background-image:url({{ asset('frontend') }}/images/banner1.jpg);">
      <div class="caption">
        <div class="container">
          <div class="con">
            <h2>Experience Our <br>
              Approch to <span>Senior Living <br>
              & Support</span></h2>
            <p>Assistance with daily tasks in group or shared living arrangements to help individuals to live as autonomously as possible.</p>
            <a href="#" class="btn btn-primary">contact Us</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!------ banner area stop --------> 
<!-------About Us start  ------->
<div class="aboutus_area">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="aboutus_thumble"> <img src="{{ asset('frontend') }}/images/aboutimg.png" alt="#">
          <div class="since">
            <h5><span><img src="{{ asset('frontend') }}/images/about_icon3.png" alt=" "></span>Excellent Experience <br>
              Since 2015</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="aboutus_contantbox">
          <h2>Welcome <br>
            to <span> Sandalwood <small>senior living</small></span> </h2>
          <p>Sandalwood living room is a newly renovated property that strives to provide our residents with all the comforts of home.  Our goal is to help ease the transition from hospital, rehabilitation, or independent living to assisted living, focusing on personalized care specific to an individual's needs that help encourage both choice and independence.</p>
          <div class="whybox">
            <div class="whyicon"><img src="{{ asset('frontend') }}/images/abouticon.png" alt=" "></div>
            <h4>Resuming Group Activities</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh.</p>
          </div>
          <div class="whybox">
            <div class="whyicon"><img src="{{ asset('frontend') }}/images/abouticon1.png" alt=" "></div>
            <h4>Open to Family Visits</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-------About Us stop  -------> 

<!------- Higher Standard start  ------->
<div class="ourservices_area p-8">
  <div class="container">
    <div class="d-flex justify-content-between">
      <div class="d-block">
        <h2>A Higher Standard <br>
          in <span>Senior Living</span></h2>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh. Ut rhoncus metus sollicitudin magna consequat posuere. Orci varius natoque penatibus et magnis dis parturient montes.</p>
    </div>
    <div class="owl-carousel service_carousel" id="servicecarousel">
      <div class="ourservices_box"> <a href="#">
        <div class="ourservices_thumble d-flex"> <img src="{{ asset('frontend') }}/images/standardimg2.jpg" alt="#">
          <div class="overbox">
            <div class="icon" style="background-image: url({{ asset('frontend') }}/images/icon2.png);"></div>
            <h4>Prepare for Move</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
          </div>
        </div>
        </a> </div>
      <div class="ourservices_box"> <a href="#">
        <div class="ourservices_thumble d-flex"> <img src="{{ asset('frontend') }}/images/standardimg1.jpg" alt="#">
          <div class="overbox">
            <div class="icon" style="background-image: url({{ asset('frontend') }}/images/icon3.png);"></div>
            <h4>Discussion</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
          </div>
        </div>
        </a> </div>
      <div class="ourservices_box"> <a href="#">
        <div class="ourservices_thumble d-flex"> <img src="{{ asset('frontend') }}/images/standardimg.jpg" alt="#">
          <div class="overbox">
            <div class="icon" style="background-image: url({{ asset('frontend') }}/images/icon1.png);"></div>
            <h4>Finding Right Option</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
          </div>
        </div>
        </a> </div>
      <div class="ourservices_box"> <a href="#">
        <div class="ourservices_thumble d-flex"> <img src="{{ asset('frontend') }}/images/standardimg2.jpg" alt="#">
          <div class="overbox">
            <div class="icon" style="background-image: url({{ asset('frontend') }}/images/icon2.png);"></div>
            <h4>Prepare for Move</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
          </div>
        </div>
        </a> </div>
      <div class="ourservices_box"> <a href="#">
        <div class="ourservices_thumble d-flex"> <img src="{{ asset('frontend') }}/images/standardimg1.jpg" alt="#">
          <div class="overbox">
            <div class="icon" style="background-image: url({{ asset('frontend') }}/images/icon3.png);"></div>
            <h4>Discussion</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
          </div>
        </div>
        </a> </div>
      <div class="ourservices_box"> <a href="#">
        <div class="ourservices_thumble d-flex"> <img src="{{ asset('frontend') }}/images/standardimg.jpg" alt="#">
          <div class="overbox">
            <div class="icon" style="background-image: url({{ asset('frontend') }}/images/icon1.png);"></div>
            <h4>Finding Right Option</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
          </div>
        </div>
        </a> </div>
    </div>
  </div>
</div>
<!------- Higher Standard start  -------> 

<!------- Book an Appointment start  ------->
<div class="bookan" style="background:url({{ asset('frontend') }}/images/bookanbg.jpg)">
  <div class="container">
    <h2>Book an Appointment - <span>Today</span></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh. Ut rhoncus metus sollicitudin magna consequat posuere. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    <div class="text-center"> <a href="#" class="callus">Call Us</a> <a href="#" class="callus">Email Us</a> </div>
  </div>
</div>
<!------- Book an Appointment stop  -------> 

<!------- Why Choose Us start  ------->
<div class="whyus">
  <div class="container">
    <h2>Why <span>Choose Us</span></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh. Ut rhoncus metus sollicitudin.</p>
    <div class="row">
      <div class="col-lg-7">
        <div class="whybox">
          <div class="whyicon"><img src="{{ asset('frontend') }}/images/whyicon.png" alt=" "></div>
          <h4>Meeting Your Emotional Needs</h4>
          <p>In vitae ullamcorper justo. Curabitur tincidunt congue in auctor quam lacinia nec. Etiam eros lorem.</p>
        </div>
        <div class="whybox">
          <div class="whyicon"><img src="{{ asset('frontend') }}/images/whyicon1.png" alt=" "></div>
          <h4>Meeting Your Emotional Needs</h4>
          <p>In vitae ullamcorper justo. Curabitur tincidunt congue in auctor quam lacinia nec. Etiam eros lorem.</p>
        </div>
        <div class="whybox">
          <div class="whyicon"><img src="{{ asset('frontend') }}/images/whyicon2.png" alt=" "></div>
          <h4>Meeting Your Emotional Needs</h4>
          <p>In vitae ullamcorper justo. Curabitur tincidunt congue in auctor quam lacinia nec. Etiam eros lorem.</p>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="story_video"> <img src="{{ asset('frontend') }}/images/videoimg.jpg" alt="video" title=""> <a  data-fancybox href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="video-play-button"><span></span></a> </div>
      </div>
    </div>
  </div>
</div>
<!------- Why Choose Us stop  -------> 

<!------- What we do start  ------->
<div class="Whatwedo_area p-8">
  <div class="container">
    <h2>Our <span>Services</span></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh. Ut rhoncus metus sollicitudin.</p>
    <div class="Whatwedo_box row">
      <div class="col-lg-6 col-md-6 Whatwedoimg d-flex flex-wrap align-content-stretch">
        <div class="Whatwedo_thumble d-flex"> <img src="{{ asset('frontend') }}/images/serviceimg.png"> </div>
      </div>
      <div class="col-lg-6 col-md-6 Whatwedocontent d-flex flex-wrap align-content-stretch align-items-center">
        <div class="Whatwedo_textbox">
          <h3>Assisted Living</h3>
          <p>With Globalization Solution’s Strong global presence, companies can quickly start their business operations in any country worldwide. Expanding overseas is easy with our EOR assistance because it takes care of all your HR and payroll responsibilities with total compliance. We enable you expand globally without establishing a new entity, which means you can reduce the expansion cost.</p>
          <a href="#" class="more">Learn more</a> </div>
      </div>
    </div>
    <div class="Whatwedo_box row">
      <div class="col-lg-6 col-md-6 Whatwedoimg d-flex flex-wrap align-content-stretch">
        <div class="Whatwedo_thumble d-flex"> <img src="{{ asset('frontend') }}/images/serviceimg1.png"> </div>
      </div>
      <div class="col-lg-6 col-md-6 Whatwedocontent d-flex flex-wrap align-content-stretch align-items-center">
        <div class="Whatwedo_textbox">
          <h3>Memory Care</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh. Ut rhoncus metus sollicitudin magna consequat posuere. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas quam elit, tempus sed finibus non, bibendum eu dolor.</p>
          <a href="#" class="more">Learn more</a> </div>
      </div>
    </div>
    <div class="Whatwedo_box row">
      <div class="col-lg-6 col-md-6 Whatwedoimg d-flex flex-wrap align-content-stretch">
        <div class="Whatwedo_thumble d-flex"> <img src="{{ asset('frontend') }}/images/serviceimg2.png"> </div>
      </div>
      <div class="col-lg-6 col-md-6 Whatwedocontent d-flex flex-wrap align-content-stretch align-items-center">
        <div class="Whatwedo_textbox">
          <h3>Home Health Care</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh. Ut rhoncus metus sollicitudin magna consequat posuere. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas quam elit, tempus sed finibus non, bibendum eu dolor.</p>
          <a href="#" class="more">Learn more</a> </div>
      </div>
    </div>
    <div class="Whatwedo_box row">
      <div class="col-lg-6 col-md-6 Whatwedoimg d-flex flex-wrap align-content-stretch">
        <div class="Whatwedo_thumble d-flex"> <img src="{{ asset('frontend') }}/images/serviceimg3.png"> </div>
      </div>
      <div class="col-lg-6 col-md-6 Whatwedocontent d-flex flex-wrap align-content-stretch align-items-center">
        <div class="Whatwedo_textbox">
          <h3>Hospice</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh. Ut rhoncus metus sollicitudin magna consequat posuere. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas quam elit, tempus sed finibus non, bibendum eu dolor.</p>
          <a href="#" class="more">Learn more</a> </div>
      </div>
    </div>
    <div class="Whatwedo_box row">
      <div class="col-lg-6 col-md-6 Whatwedoimg d-flex flex-wrap align-content-stretch">
        <div class="Whatwedo_thumble d-flex"> <img src="{{ asset('frontend') }}/images/serviceimg4.png"> </div>
      </div>
      <div class="col-lg-6 col-md-6 Whatwedocontent d-flex flex-wrap align-content-stretch align-items-center">
        <div class="Whatwedo_textbox">
          <h3>Amenities</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh. Ut rhoncus metus sollicitudin magna consequat posuere. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas quam elit, tempus sed finibus non, bibendum eu dolor.</p>
          <a href="#" class="more">Learn more</a> </div>
      </div>
    </div>
  </div>
</div>
<!------- What we do stop  -------> 
<!------- Clients Say start -------> 

<div class="clientsay_area p-8">
  <div class="container">
    <h2>Our <span>Locations</span></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh. Ut rhoncus metus sollicitudin magna consequat posuere. </p>
    
  </div>
  <div class="row m-0">
      
      
        <div class="client_rightbox">
         
          <div class="owl-carousel client-carousel" id="clientslider">
            <a href="#">
            <div class="clientbox">
              <div class="locationimg">
                <img src="{{ asset('frontend') }}/images/Locationsimg.jpg" alt=" ">
                <h4>Sandalwood Valley</h4>
              </div>
            </div>
          </a>
          <a href="#">
            <div class="clientbox">
             
              <div class="locationimg">
                <img src="{{ asset('frontend') }}/images/Locationsimg.jpg" alt=" ">
               <h4>Sandalwood Valley</h4>
              </div>
            
            </div>
            </a>
            <a href="#">
            <div class="clientbox">
              
              <div class="locationimg">
               <img src="{{ asset('frontend') }}/images/Locationsimg.jpg" alt=" ">
               <h4>Sandalwood Valley</h4>
              </div>
            
            </div>
            </a>
          </div>
        
      </div>
    </div>
</div>

<!------- Clients Say stop -------> 
<!------- Our Latest News start  ------->
<div class="latest pt-0">
  <div class="container">
    <h2>Our <span>Latest News</span></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh. Ut rhoncus metus sollicitudin magna consequat posuere. Orci varius natoque penatibus et magnis dis parturient montes.</p>
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="newbox">
          <div class="newimg"><img src="{{ asset('frontend') }}/images/newimg.jpg" alt=" ">
            <div class="clock"><i class="fa fa-clock-o" aria-hidden="true"></i>July 24, 2021</div>
          </div>
          <div class="ntxt">
            <h4><a href="#">Helping Seniors Learn New Hobbies</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="newbox">
          <div class="newimg"><img src="{{ asset('frontend') }}/images/newimg1.jpg" alt=" ">
            <div class="clock"><i class="fa fa-clock-o" aria-hidden="true"></i>July 24, 2021</div>
          </div>
          <div class="ntxt">
            <h4><a href="#">Helping Seniors Learn New Hobbies</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="newbox">
          <div class="newimg"><img src="{{ asset('frontend') }}/images/newimg2.jpg" alt=" ">
            <div class="clock"><i class="fa fa-clock-o" aria-hidden="true"></i>July 24, 2021</div>
          </div>
          <div class="ntxt">
            <h4><a href="#">Helping Seniors Learn New Hobbies</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh.</p>
          </div>
        </div>
      </div>
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55565170.29301636!2d-132.08532758867793!3d31.786060306224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1627911753138!5m2!1sen!2sin" width="100%" height="525px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
      <div class="col-lg-6 p-5">
        <h2>How can <span>we help?</span></h2>
        <form>
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
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Phone">
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

