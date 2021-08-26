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
      
      <div class="contact_pageformbox mt-0">
          @foreach($extra_data as $val)
  @if($val->type==2)
          <h2>{!!$val->title!!}</h2>
          <p>{!!$val->sub_title!!}</p>
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
           <form method="POST" action="{{ url('book_appoinment') }}" class="customvalidation">
           @csrf
            <div class="row">
              <div class="col-lg-12">
                <div class="row row-8">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" data-validation-engine="validate[required]" name="name" value="{{old('name')}}" placeholder=" Name*">
                    </div>
                  </div>
                 
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" data-validation-engine="validate[required]" name="email" value="{{old('email')}}" placeholder="Email*">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                     <input type="text" class="form-control numeric_input"placeholder="Phone*" data-validation-engine="validate[required]" name="phone" maxlength="10" value="{{old('phone')}}">
                    </div>
                  </div>
                   <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" data-validation-engine="validate[required]" name="address" value="{{old('address')}}" placeholder="booking Locations" >
                    </div>
                  </div>
                   <div class="col-lg-6">
                    <div class="form-group">
                      <input type="date" class="form-control" name="book_date" placeholder="date*" data-validation-engine="validate[required]" value="{{old('book_date')}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="book_time" readonly placeholder="time" data-validation-engine="validate[required]" value="{{old('book_time')}}">
                    </div>
                  </div>
                  <div class="col-lg-12">
              <div class="form-group">
                     <textarea class=" form-control" placeholder="Message" name="message">{{old('message')}}</textarea>
                    </div>
                    @foreach($extra_data as $val)
  @if($val->type==3)
                    <input type="submit" class="btn btn-primary" value="{!!$val->btn_text?$val->btn_text:'Submit now'!!}" name="">
              @endif
@endforeach
              </div>
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
 <script src="{{ asset("/frontend/js/timepick.js") }}"></script> 

   <script type="text/javascript">
    $(document).ready(function(){
        $('input[name="book_time"]').ptTimeSelect();
    });
</script>