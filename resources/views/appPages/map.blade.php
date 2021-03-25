@extends('layouts.app')

@section('main-content')

    <!-- Map Page -->
    <div data-role="page" id="map-page">
            
        <!-- Header -->
        <div class="ui-navbar">
			<a data-rel="back" data-transition="slide" data-direction="reverse" class="w3-left"><i class="material-icons nav-icon" title="Go back">arrow_back</i></a> 
        </div> <!-- End header -->

        <!-- Main -->
        <div data-role="content">
            <!-- Map container -->
            <div id="map-container">
                <!-- Map -->				
                <div id="map-canvas">
                    <p id="nogeolocation"></p> 
                </div>
            </div> <!-- End map container -->
        </div> <!-- End main -->
        
    </div> <!-- End page -->
@endsection