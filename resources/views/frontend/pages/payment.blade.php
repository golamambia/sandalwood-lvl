@include('frontend.header')

@foreach($extra_data as $val)
  @if($val->type==1)
<!------ banner area start -------->
<div class="subpagr_banner" style="background-image:url({{ asset('/uploads/'.$val->image) }});">
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
      
      <div class="card_information">
             <form method="POST" action="{{ url('paymentform') }}" class="customvalidation">
           @csrf
        <div class="row">
          <div class="col-lg-6">
            <div class="contact_pagetop">
              <h2 class="text-left">Card <span>Information</span></h2>
              <p class="text-left w-100">Include details of the card froms wich money will be debited</p>
              <img src="{{ asset('frontend') }}/images/card.png" alt="card" title="" /> </div>
          </div>

   
          <div class="col-lg-6">
            <div class="contact_pagetop">
               @foreach($extra_data as $val)
           @if($val->type==3)
              <h2 class="text-left">{!!$val->title!!}</h2>
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
              <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="First Name*" data-validation-engine="validate[required]" name="fname" value="{{old('fname')}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Last Name*" data-validation-engine="validate[required]" name="lname" value="{{old('lname')}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control"  placeholder="Email*" data-validation-engine="validate[required]" name="email" value="{{old('email')}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control numeric_input"placeholder="Phone*" data-validation-engine="validate[required]" name="phone" maxlength="10" value="{{old('phone')}}">
                    </div>
                  </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <input type="text" class="form-control" placeholder="State*" data-validation-engine="validate[required]" name="state" value="{{old('state')}}">
                      <!--  <select class="select form-control" name="estados" id="estados">
                          <option value="selecione" disabled selected>Selet State</option>
                      </select> -->
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                       <input type="text" class="form-control" placeholder="City*" data-validation-engine="validate[required]" name="city" value="{{old('city')}}">
                      <!-- <select class="select form-control" name="cidades" id="cidades">
                         <option value="selecione" disabled selected>Selet city</option>
                      </select> -->
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                       <textarea class=" form-control" placeholder="Message" name="message">{{old('message')}}</textarea>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="w-100 text-center mt-4">
               @foreach($extra_data as $val)
           @if($val->type==2)
              <button class="btn-application">{!!$val->btn_text?$val->btn_text:'Pay now'!!}</button>
               @endif
@endforeach
            </div>
          </div>


        </div>
</form>

      </div>
    </div>
  </div>
</div>
<!------ main area stop --------> 
@include('frontend.footer')