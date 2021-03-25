@extends('layouts.app')

@section('main-content')

    <!-- Favourite Pape -->
    <div data-role="page" id="list-favourite-page">
                
        <!-- Header -->
        <div data-role="header">
            
            <div class="ui-navbar">
                <!-- Login -->
                <a href="/home" class="w3-left" data-transition="slide" data-direction="reverse" title="Home page"><i class="material-icons">home</i></a>
            
            </div>
        </div> <!-- End header -->
        
        <!-- Main -->
        <div data-role="content" class="page-content-10">
            <h2>My favourites</h2>
            <ul id="favlist" data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="Search favourites">
            </ul>  
        </div> <!-- End main -->     

    </div> <!-- End page -->
@endsection