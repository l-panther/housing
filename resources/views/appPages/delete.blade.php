@extends('layouts.app')

@section('main-content')

    <!-- Page -->
    <div data-role="page" id="account-page">
        
		<div data-role="header" class="ui-navbar">
			<a href="/account" data-transition="slide" data-direction="reverse" class="w3-left"><i class="material-icons nav-icon" title="Go back">arrow_back</i></a> 
        </div>
		
        <!-- Main -->
        <div data-role="content" class="page-content-10">
        
            <h2>Delete Account</h2>
            <div class="w3-margin-bottom w3-padding-bottom">
                <p class="w3-padding-bottom">Deleting your account will remove all personal data stored from our 
                    database and you will immediately be logged out of the system.</p>
                <p class="w3-margin-bottom">You will have to create a new account if you want to continue 
                    to use this app.</p>
                <p>Are you sure you want to delete your account?</p>
            
                <div class="w3-center">
                    <form method="POST" action="{{ route('deleteuser', $user->id) }}" id="form-delete">
                        @csrf

                        <label for="name" class="ui-hidden-accessible">{{ __('Username') }}</label>

                        <input id="email" type="hidden" value="{{ Auth::user()->email}}">

                        <input type="submit" value="Confirm Delete" id="delete-btn">
                    </form>
                </div>
            </div>
        </div> <!-- End main -->
    </div>
@endsection