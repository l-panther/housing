@extends('layouts.app')

@section('main-content')
    <!-- Login page -->
    <div data-role="page" class="w3-text-white w3-center" id="login-page">
        <!-- Main -->
        <div data-role="content">

            <div class="w3-display-container banner">
                <!-- <img src="images/logo/logo2.png" alt="Company logo"> -->
				<h1>Zedland</h1>
				<p>Estate Agency</p>
            </div>
                                   
            <div class="w3-container">

                <form method="POST" action="{{ route('login') }}" id="form-login">
                    @csrf

                    <label for="email" class="ui-hidden-accessible">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" placeholder="Email" class="w3-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password" class="ui-hidden-accessible">{{ __('Password') }}</label>

                    <input id="password" type="password" placeholder="Password" class="w3-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <button type="submit" class="ui-btn" id="submit">
                        {{ __('Log in') }}
                    </button>
					
					 @if (Route::has('password.request'))
						<div class="forgot-password">
							<a href="{{ route('password.request') }}">
								{{ __('Forgot Password?') }}
							</a>
						</div>
                    @endif
					
                </form>
				
				@include('include.sociallinks')

                <p class="w3-center w3-margin-top w3-margin-bottom">Don't have an account? <a href="/register">Sign up</a></p>
            </div>
        </div>
    </div>

@endsection
