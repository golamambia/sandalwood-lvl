@include('frontend.header')

<!------ banner area start -------->
<div class="subpagr_banner" style="background-image:url({{ asset('frontend') }}/images/subbanner1.jpg);">
  <div class="container">
    <h1>Payment</h1>
    <nav class="breadcrumb"> <a class="breadcrumb-item" href="{{url('/')}}">home</a> <span class="breadcrumb-item active">Payment</span> </nav>
  </div>
</div>
<!------ banner area stop --------> 

<!------ main area start -------->

<div class="mainarea p-80">
  <div class="contact_page">
    <div class="container">
      <div class="contact_pagetop mb-4">
        <h2 class="text-left">contact <span>us</span></h2>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" value="">
            Debit Card </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" value="">
            Credit Card </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" value="">
            Cash Pay </label>
        </div>
      </div>
      <div class="card_information">
        <div class="row">
          <div class="col-lg-6">
            <div class="contact_pagetop">
              <h2 class="text-left">Card <span>Information</span></h2>
              <p class="text-left w-100">Include details of the card froms wich money will be debited</p>
              <img src="{{ asset('frontend') }}/images/card.png" alt="card" title="" /> </div>
          </div>
          <div class="col-lg-6">
            <div class="contact_pagetop">
              <h2 class="text-left">Personal <span>Information</span></h2>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="number" class="form-control" placeholder="Phone" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="City" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Zip Code" />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="State" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="w-100 text-center mt-4">
              <button class="btn-application">Pay Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!------ main area stop --------> 
@include('frontend.footer')