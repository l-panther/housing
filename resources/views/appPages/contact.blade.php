@extends('layouts.app')

@section('main-content')

    <!-- Accommodation Pape -->
    <div data-role="page" id="contact-page">

        @include("include.sidemenu")
        
        <!-- Main -->
        <div data-role="content" class="w3-text-white page-content-10">
            
            <h2>Contact Us</h2>
            <p>We are always here to help you with your enquires.</p>
                
            <!-- Telephone -->
            <a href="tel:+7956481427" id="callbtn" class="ui-btn ui-corner-all w3-padding"><span>Call Us</span><i class="fa fa-phone w3-right"></i></a>

            <!-- Text -->
            <a href="sms://+7956481427" id="textbtn" class="ui-btn ui-corner-all w3-padding"><span>Message Us</span><i class="fa fa-envelope w3-right"></i></a>
                
            <!-- Email -->
            <a href="mailto:uni_zed@zedland.co.uk" id="emailbtn" class="ui-btn ui-corner-all w3-padding"><span>Email Us</span><i class="fa fa-at w3-right"></i></a>
                
            <!-- Write -->
            <h3 class="w3-text-white w3-margin-top" id="address"><strong>Write to us:</strong></h3>
            <ul>
                <li aria-labelledby="address" class="w3-padding-top">74 Castle Garden</li>
                <li aria-labelledby="address">Capital Town</li>
                <li aria-labelledby="address">Zedland</li>
                <li aria-labelledby="address">ZL9 6AC</li>
            </ul>
            
        </div> <!-- End main -->
    </div>
@endsection