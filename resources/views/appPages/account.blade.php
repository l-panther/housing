@extends('layouts.app')

@section('main-content')

    <!-- Page -->
    <div data-role="page" id="account-page">
        
        @include("include.sidemenu")
    
        <!-- Main -->
        <div data-role="content" class="page-content">
            <div class="w3-black account-img">
                <!-- Right Side Of Navbar -->
                <ul class="w3-center">
                    <!-- Authentication Links -->
                    <li><img src="images/icons/user.png" alt="Profile picture of user"></li>
                    <li class="w3-padding">{{ ucwords(Auth::user()->name) }} </li>
                </ul>
            </div>

			<div class="w3-container">
				<h2>My Account</h2>
				<div class="w3-margin-bottom w3-padding-bottom">
					<dl>
						<dt id="acc-details" class="w3-text-black"><b>Account details</b></dt>
						<dd aria-labelledby="acc-details"><span class="detail">Name: </span>{{ ucwords(Auth::user()->name) }}</dd>
						<dd aria-labelledby="acc-details"><span class="detail">Email: </span>{{ Auth::user()->email }}</dd>
						
					</dl>
					
					<div class="w3-center">
						<a href="/delete?user->id" class="ui-btn delete-btn">Delete Account</a>
					</div>
				</div>
			</div>
        </div> <!-- End main -->
    </div>
@endsection