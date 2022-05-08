@extends('layouts.landing_page')

@section('title')
Register
@endsection

@section('content')

<!-- <div class="content content-fixed content-auth-alt">
   <div class="container ht-100p">
        <div class="ht-100p d-flex flex-column align-items-center justify-content-center">
			<div class="sign-wrapper">
            <div class="wd-100p">
              <h4 class="tx-color-01 mg-b-5">Create New Account</h4>
              <p class="tx-color-03 tx-16 mg-b-40">It's free to signup and only takes a minute.</p>

              <div class="form-group">
                <label>Email</label>
                <input type="email" style="border-radius:0px;" class="form-control" placeholder="Enter your email">
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                  <label class="mg-b-0-f">Password</label>
                </div>
                <input type="password" style="border-radius:0px;" class="form-control" placeholder="Enter your password">
              </div>
              <div class="form-group">
                <label>Name</label>
                <input type="text" style="border-radius:0px;" class="form-control" placeholder="Enter your name">
              </div>
              <div class="form-group tx-12">
                By clicking <strong>Create an account</strong> below, you agree to our terms of service and privacy statement.
              </div>

              <button class="btn btn-dark btn-block" style="border-radius:0px;">Create Account</button>
              <div class="tx-13 mg-t-20 tx-center">Already have an account? <a href="{{ url('/login') }}">Sign In</a></div>
            </div>
        	  </div>
			</div>
      </div>
</div> -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
