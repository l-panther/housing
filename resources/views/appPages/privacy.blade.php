@extends('layouts.app')

@section('main-content')

    <!-- Page -->
    <div data-role="page" id="privacy-page">
        
        <!-- Header -->
        <div data-role="header">
            
            <div class="ui-navbar">
                <!-- Login -->
                <a href="/home" class="w3-left" data-transition="slide" data-direction="reverse"><i class="material-icons">home</i></a><!-- Login -->
                
            </div>
        </div>
        
        <div class="banner">
            <div class="w3-display-container">
                <img src="images/banner/banner.png" alt="Banner">

                <div class="w3-display-middle">
                    <h1>Privacy</h1>
                </div>

            </div>
        </div>
                
        <!-- Main -->
        <div data-role="content" class="page-content-10">
            
            <h2>Privacy</h2>
            <p>This application will require your permission to access the local storage and geolocation of your device if you wish use all the features.<br><br>No data about you or your device will be collected.</p>
            
        </div> <!-- End main -->
        
    </div> <!-- End page -->
@endsection