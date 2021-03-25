@extends('layouts.app')

@section('main-content')

    <!-- Accommodation Pape -->
    <div data-role="page" id="index-page">

        @include("include.sidemenu")

        <!--  Content -->
        <div data-role="content" class="w3-text-white w3-center page-content">
         
			 <div class="w3-display-container banner">
                <!-- <img src="images/logo/logo2.png" alt="Company logo"> -->
				<h1>Zedland</h1>
				<p>Estate Agency</p>
            </div>
            
            <!-- Main buttons -->
            <div id="mainBtns">

                <!-- Solo button -->
                <div class="ui-grid-solo w3-center" id="findBtn">
                    <!-- Favourites button -->
                    <a href="/listproperty"><span>FIND ACCOMODATION</span><i class="fa fa-search w3-right w3-padding-top"></i></a>
                </div>
                
                <!-- Solo button -->
                <div class="ui-grid-solo w3-center" id="favBtn">
					
					<span class="w3-left" id="countFav"></span>
					
                    <!-- Favourites button -->
                    <a href="/listfavourite"><span>FAVOURITES</span><i class="fa fa-heart w3-right w3-padding-top"></i></a>
                </div>
                
                <div id="map-container">
                    <!-- Map -->				
                    <div id="map-canvas">
                        <p id="nogeolocation"></p> 
                    </div>
                </div> <!-- End map container -->
            </div> <!-- End row -->

            <!-- Social media -->
            <div id="socialmedia">
                <div class="w3-bar w3-center w3-padding-6">
                    <!-- Popup images -->
                    <a href="#share-popup" id="share-link" data-rel="popup">
						
						
                    </a> <!-- End images -->
                </div>
            </div> <!-- End social media -->

            <!-- Popup Share -->
            <div data-role="popup" id="share-popup" data-theme="a" data-dismissible="false" data-history="false" data-position-to="window" data-display="overlay">
                <div data-role="header" class="ui-header">
                    <h1>Share</h1>
                </div>
                <div data-role="content" class="page-content-10">
                    <p>Share on <span id="sharechannel"></span></p>
                    <a href="#" data-role="button" data-rel="back" class="w3-padding">Cancel</a>
                </div>
            </div> <!-- End popup -->
            
        </div> <!-- End content -->
    </div> <!-- End index pape -->
@endsection