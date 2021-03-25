@extends('layouts.app')

@section('main-content')
    <!-- Login page -->
    <div data-role="page" class="w3-text-white w3-center" id="register-page">
        <!-- Main -->
        <div data-role="content">
                            
            <div class="w3-display-container banner">
                <!-- <img src="images/logo/logo2.png" alt="Company logo"> -->
				<h1>Zedland</h1>
				<p>Estate Agency</p>
            </div>

            <div class="w3-container">

                <form method="POST" action="{{ route('register') }}" id="form-register">
                    @csrf

                    <label for="username" class="ui-hidden-accessible">{{ __('User name') }}</label>

                    <input id="username" type="text" placeholder="Username" class="w3-input @error('username') is-invalid @enderror" name="lname" value="{{ old('username') }}" required autocomplete="username" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

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

                    <label for="password-confirm" class="ui-hidden-accessible">{{ __('Confirm Password') }}</label>

                    <input id="password-confirm" type="password" placeholder="Confirm assword" class="w3-input" name="password_confirmation" required autocomplete="new-password">

                    <!-- Terms and condition -->
                    <input type="checkbox" name="checkbox-0" id="checkbox-mini-0" class="custom" data-mini="true" required/>
                    <label class="terms-container" for="checkbox-mini-0"><span class="terms">I have read and agree to the terms and conditions.</span></label> <!-- End terms and condition -->
                    
                    <button type="submit" class="ui-btn" id="submit">
                        {{ __('Register') }}
                    </button>
                </form>
				
				@include('include.sociallinks')
				
				<p class="w3-center w3-margin-top w3-margin-bottom">Already have an account? <a href="/">Sign in</a></p>
            </div>
        </div>

        @include('include.footer')
    </div>

@endsection
