@include('frontend.header')

<!------ banner area start -------->
<div class="subpagr_banner" style="background-image:url({{ asset('frontend') }}/images/subbanner1.jpg);">
      <div class="container">
          <h1>Contact <strong>Us</strong></h1>
              <nav class="breadcrumb">
              <a class="breadcrumb-item" href="{{url('/')}}">home</a>
              <span class="breadcrumb-item active">news</span>
            </nav>
        </div>
</div>
<!------ banner area stop --------> 

<!------ main area start -------->


<div class="mainarea p-80">
  <div class="contact_page">
    <div class="container">
      <div class="contact_pagetop">
        <h2>contact <span>us</span></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh. Ut rhoncus metus sollicitudin.</p>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <h3>Sandalwood <span>Village</span></h3>
              <ul>
                <li><img src="{{ asset('frontend') }}/images/iconcontact1.png" alt="#"> 47640 Gratiot Ave. Chesterfield, 
MI  48051</li>
                <li><img src="{{ asset('frontend') }}/images/iconcontact2.png" alt="#"> 586-949-6220</li>
                <li><img src="{{ asset('frontend') }}/images/iconcontact3.png" alt="#"> 586-949-6225</li>
                <li><img src="{{ asset('frontend') }}/images/iconcontact4.png" alt="#"> info@sandalwood.com</li>
              </ul>
              <a href="#" class="btn btn-outline-primary">View Google Maps</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <h3>Sandalwood <span>Village</span></h3>
              <ul>
                <li><img src="{{ asset('frontend') }}/images/iconcontact1.png" alt="#"> 47640 Gratiot Ave. Chesterfield, 
MI  48051</li>
                <li><img src="{{ asset('frontend') }}/images/iconcontact2.png" alt="#"> 586-949-6220</li>
                <li><img src="{{ asset('frontend') }}/images/iconcontact3.png" alt="#"> 586-949-6225</li>
                <li><img src="{{ asset('frontend') }}/images/iconcontact4.png" alt="#"> info@sandalwood.com</li>
              </ul>
              <a href="#" class="btn btn-outline-primary">View Google Maps</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <h3>Sandalwood <span>Village</span></h3>
              <ul>
                <li><img src="{{ asset('frontend') }}/images/iconcontact1.png" alt="#"> 47640 Gratiot Ave. Chesterfield, 
MI  48051</li>
                <li><img src="{{ asset('frontend') }}/images/iconcontact2.png" alt="#"> 586-949-6220</li>
                <li><img src="{{ asset('frontend') }}/images/iconcontact3.png" alt="#"> 586-949-6225</li>
                <li><img src="{{ asset('frontend') }}/images/iconcontact4.png" alt="#"> info@sandalwood.com</li>
              </ul>
              <a href="#" class="btn btn-outline-primary">View Google Maps</a>
            </div>
          </div>
        </div>
      </div>
      <div class="contact_pageformbox">
          <h2>Request A Quote</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sollicitudin tortor, sit amet iaculis nibh. Ut rhoncus metus sollicitudin.</p>
          <form action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <div class="row row-8">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="" placeholder="First Name*">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="" placeholder="Last Name*">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="" placeholder="Email*">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="number" class="form-control" name="" placeholder="Phone*">
                    </div>
                  </div>
                   <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="" placeholder="Address*">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="" placeholder="Zip Code*">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                       <select class="select form-control" name="estados" id="estados">
                          <option value="selecione" disabled selected>Selet State</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <select class="select form-control" name="cidades" id="cidades">
                         <option value="selecione" disabled selected>Selet city</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
             
                   <div class="form-group">
                      <select class=" form-control" name="" id="">
                         <option value="selecione" disabled selected>Reason for Contact</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <textarea class=" form-control" placeholder="Message"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit now" name="">
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
<!------ main area stop --------> 

@include('frontend.footer')