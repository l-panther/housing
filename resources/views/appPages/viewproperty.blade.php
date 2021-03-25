@extends('layouts.app')

@section('main-content')

    <!-- Page -->
    <div data-role="page" id="view-property-page">
        
        <!-- Main -->
        <div data-role="content">
            
            <div class="ui-navbar topbar">
                <a href="/listproperty" data-transition="slide" data-direction="reverse" title="Go back" class="w3-left"><i class="material-icons nav-icon">arrow_back</i></a>

                <a href="#" data-transition="pop" title="Add to Favourites" id="addfav-btn"><i class="fa fa-heart w3-right nav-iconr"></i></a>
                
            </div>
            
            <!-- Section -->
            <section class="main-content" id="property-info">
                <!-- Property Id -->
                <div id="property-id"></div>

                <!-- Display property content -->
                <div id="display-content"></div>

				 <div class="ui-bar w3-light-grey w3-center" id="footer">
					<div class="w3-right" id="interested">
						<button class="ui-btn w3-text-white">Interested</button>
					</div>
				</div>
            </section> <!-- End section -->
            
        </div> <!-- End main -->
      
    </div> <!-- End page -->
@endsection