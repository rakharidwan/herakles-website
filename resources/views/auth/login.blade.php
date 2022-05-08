
@extends('layouts.landing_page')

@section('styles')
	<style>
		.btn-signin:hover{
			background-color: #001737;
			color: #fff;
			border: 1px solid #001737;
		}
	</style>
@endsection

@section('content')
<div class="content content-fixed content-auth-alt">
   <div class="container ht-100p">
        <div class="ht-100p d-flex flex-column align-items-center justify-content-center">
			<div class="sign-wrapper" style="margin-top:70px">
        	    <div class="wd-100p"> 
        	      <h3 class="tx-color-01 mg-b-5">Sign In</h3>
        	      <p class="tx-color-03 tx-16 mg-b-40">Please signin to continue.</p>
                  <form method="POST" action="{{ route('login') }}">
                        @csrf
        	      <div class="form-group">
        	        <label>Email</label>
        	        <input type="email" name="email" style="border-radius:0px;" class="form-control" placeholder="Enter Your Email">
        	      </div>
        	      <div class="form-group">
        	        <div class="d-flex justify-content-between mg-b-5">
        	          <label class="mg-b-0-f">Password</label>
        	          <a href="" class="tx-13">Forgot password?</a>
        	        </div>
        	        <input type="password" name="password" class="form-control" style="border-radius:0px;" placeholder="Enter your password">
        	      </div>
        	      <button type="submit" class="btn btn-block btn-dark" style="border-radius:0px;">Sign In</button>
                </form>
        	      <div class="tx-13 mg-t-20 tx-center">Don't have an account? <a href="{{ url('/register') }}">Create an Account</a></div>
        	    </div>
        	  </div>
			</div>
      </div>
</div><!-- content -->
@endsection

@section('scripts')

@endsection


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
