@extends('layouts.app')

@section('main-content')

    <!-- Page -->
    <div data-role="page" id="view-favourite-page">
        
        <!-- Main -->
        <div data-role="content">
            
            <div class="topbar">
                <a href="/listfavourite" data-transition="slide" data-direction="reverse" title="Go back" class="w3-left"><i class="material-icons nav-icon">arrow_back</i></a> 
            </div>
            
            <!-- Section -->
            <section class="main-content" id="property-info">
                <!-- Property Id -->
                <div id="property-id"></div>

                <!-- Display property content -->
                <div id="display-content"></div>

            </section> <!-- End section -->
            
        </div> <!-- End main -->
        
        <div data-role="footer" data-position="fixed" class="ui-bar w3-center" id="footer">
			
			
			<div class="w3-left" id="delete">
				<button class="ui-btn w3-text-white">Delete</button>
			</div>
			
			<div class="w3-right" id="interested">
				<button class="ui-btn w3-text-white">Interested</button>
			</div>
            
        </div>
    </div> <!-- End page -->
@endsection