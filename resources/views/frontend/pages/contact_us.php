@include('frontend.header')


<!------- inner banner area start ------->
   @foreach($extra_data as $val)
    @if($val->type==1 && $val->image && File::exists(public_path('uploads/'.$val->image)))
   
      <div class="contact-banner " style="background: url({{ asset('/uploads/'.$val->image) }}) no-repeat center top; ">
        <div class="container ">
            <div class="txt wow fadeInRight " data-wow-deuration="2s " data-wow-delay=".2s ">
                 @if($val->title)<h1>{!!$val->title!!}</h1>@endif
                {!!$val->body!!}
            </div>
        </div>
            <div class="txt-hldr"><h2>CONTACT US</h2>
            <p><marquee width="100%" direction="left" height="100px">reach us by email- ouremailid@gmil.com, call us at +91 1234567890, ﬁnd us at social media- @faceb reach us by email- ouremailid@gmil.com, call us at +91 1234567890, ﬁnd us at social media- @faceb reach us by email- ouremailid@gmil.com, call us at +91 1234567890, ﬁnd us at social media- @faceb</marquee></p>
        </div>
    </div>
    @endif
    @endforeach
    
<div class="contact">
        <div class="container">
          @foreach($extra_data as $val)

      @if($val->type==3)
           @if($val->title)
            <h3>{!!$val->title!!}</h3> @endif
            @if($val->body) {!!$val->body!!}@endif
             @endif
    @endforeach
        </div>
    </div>
   
    <div class="hm-contact ">
        <div class="container ">
            <div class="hldr wow fadeInUp " data-wow-deuration="2s " data-wow-delay=".2s ">
                 @foreach($extra_data as $val)

      @if($val->type==3 && $val->image && File::exists(public_path('uploads/'.$val->image)))
                <div class="hm-contact-logo ">
                    <img src="{{ asset('/uploads/'.$val->image) }} " alt=" ">
                </div>
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
                    <div class="form-group">
                       <label>Full name</label>
                            <input type="text" class="form-control" placeholder="Full name*" data-validation-engine="validate[required]" name="name">
                        </div>
                        <div class="form-group">
                           <label>Email Id</label>
                            <input type="text" class="form-control" placeholder="Business Email*" data-validation-engine="validate[required,custom[email]]" name="email">
                        </div>
                    <div class="form-group ">
                        <label>Type your Message</label>
                        <textarea class="form-control " name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group ">
                        <label class="check "><input type="checkbox"><span class="checkmark "></span> Need NDA?</label>
                    </div>
                    <div class="form-group "><input type="submit" value="Send "></div>
                </form>
            </div>
        </div>
    </div>




@include('frontend.footer')