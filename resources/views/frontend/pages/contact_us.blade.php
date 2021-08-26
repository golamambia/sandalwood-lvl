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
      <div class="contact_pagetop">
        @foreach($extra_data as $val)
  @if($val->type==2)
        <h2>{!!$val->title!!}</h2>
        {!!$val->body!!}
        @endif
@endforeach
        <div class="row">
             @foreach($extra_data as $val)
  @if($val->type==3)
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <h3>{!!$val->title!!}</h3>
              <ul>
                  @if($val->sub_title)
                <li><img src="{{ asset('frontend') }}/images/iconcontact1.png" alt="#"> {!!$val->sub_title!!}</li>
                @endif
                @if($val->body)
                <li><img src="{{ asset('frontend') }}/images/iconcontact2.png" alt="#"> {{strip_tags($val->body)}}</li>
                @endif
                @if($val->btn_text)
                <li><img src="{{ asset('frontend') }}/images/iconcontact3.png" alt="#"> {!!$val->btn_text!!}</li>
                @endif
                @if($val->btn_url)
                <li><img src="{{ asset('frontend') }}/images/iconcontact4.png" alt="#"> {!!$val->btn_url!!}</li>
                @endif
              </ul>
              <a href="#" class="btn btn-outline-primary">View Google Maps</a>
            </div>
          </div>
    @endif
@endforeach
        </div>
      </div>
      <div class="contact_pageformbox">
            @foreach($extra_data as $val)
  @if($val->type==4)
        <h2>{!!$val->title!!}</h2>
        {!!$val->body!!}
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
        <form method="POST" action="{{ url('contact') }}" class="customvalidation">
           @csrf
            <div class="row">
              <div class="col-lg-6">
                <div class="row row-8">
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
                      <input type="text" class="form-control" placeholder="Address*" data-validation-engine="validate[required]" name="address" value="{{old('address')}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Zip Code*" data-validation-engine="validate[required]" name="zip" value="{{old('zip')}}">
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
                </div>
              </div>
              <div class="col-lg-6">
             
                   <div class="form-group">
                     <input type="text" class="form-control" placeholder="Reason for Contact*" data-validation-engine="validate[required]" name="reason" value="{{old('reason')}}">
                     <!--  <select class=" form-control" name="" id="">
                         <option value="selecione" disabled selected>Reason for Contact</option>
                      </select> -->
                    </div>
                    <div class="form-group">
                      <textarea class=" form-control" placeholder="Message" name="message">{{old('message')}}</textarea>
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