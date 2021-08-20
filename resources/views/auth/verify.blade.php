@include('frontend.header')

<section class="inner_banner_area" style="background-image: url({{ asset("/frontend/images/innerbanner.jpg") }});">
        <div class="container">
            <div class="inner_banner_contain">
                <h1><strong>Verify Your Email Address</strong></h1>
            </div>
        </div>
 </section>

<div class="mainbox p-8">
  <div class="innerabout_us custom-login">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header innerhead">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@include('frontend.footer')
