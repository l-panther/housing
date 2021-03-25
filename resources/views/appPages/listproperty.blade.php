@extends('layouts.app')

@section('main-content')

    <!-- Accommodation Pape -->
    <div data-role="page" id="list-property-page">

        <!-- Header -->
        <div data-role="header">
            
            <div class="ui-navbar">
                <!-- Login -->
                <a href="/home" class="w3-left" data-transition="slide" data-direction="reverse" title="Home page"><i class="material-icons">home</i></a><!-- Login -->
            
            </div>
        </div>
        
        <!-- Main -->
        <div data-role="content" class="page-content-10">
            <h2>Find accommodation</h2>
            
            <ul id="propertyList" data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="Search for property.." class="w3-text-black"></ul>
            
        </div>
    </div>	
@endsection