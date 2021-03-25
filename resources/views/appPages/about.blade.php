@extends('layouts.app')

@section('main-content')

    <!-- Page -->
    <div data-role="page" id="about-page">
        
        @include("include.sidemenu")
    
        <!-- Main -->
        <div data-role="content" class="w3-text-white page-content-10">
            
            <h2>About Us</h2>
            <p class="w3-padding-bottom">London Properties is a real estate company that provides services for accommodation in London.</p>

            <p class="w3-padding-bottom">Established in 2019, we have a growing selection of properties to view, rent or buy. We are proud to be the leaders in property real estate for Londoners and those who wish relocate to London.</p>
            
            <p class="w3-padding-bottom">This application provides you with a quick, convenient and easy way to facilitate real estate services. Properties can be added to favourites, where they will be saved to your local storage to be viewed at your own convenience. A map is prothat are added to students who are currently studying or have recieved conformation of enrolment at the University of Zedland. 
            </p>
            <p class="w3-margin-top">Please <a href="/contact" class="w3-text-white">contact us</a> for more information relating to the services we provide.</p>
            
        </div> <!-- End main -->
    </div>
@endsection