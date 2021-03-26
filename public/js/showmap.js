/*
	Show map and property location
*/

$(document).on("pagecontainerbeforeshow", function(e, ui) {
	
    var page = ui.toPage[0].id;
    if (page == "index-page" || page == "map-page") {
			
        // If page is equal to string
        var lat = 51.89989; // Set latitude
        var lon = 0.8989898; // Set longitude
        var center = new google.maps.LatLng(lat, lon); // Set center
        var mapOptions = {
            // Set map options
            zoom: 12, // Zoom
            center: center, // Set map center
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            } // Map controls
        };

        var map = new google.maps.Map(
            document.getElementById("map-canvas"),
            mapOptions
        ); // Set new map to element

        // ============================ MARKER ============================ //
        var center = new google.maps.LatLng(51.89989, -0.8989898); // Co-ordinates for marker
        var marker = new google.maps.Marker({
            // New marker
            position: center // Position for marker
        });
        marker.setMap(map); // Set marker to map

		$.get(
            "data/accommodation/properties.json",
            function(result) {
				
				for (var i = 0; i < result.length; i++) {
					cord = [result[i].name:new google.maps.LatLng(51.89989, -0.8989898);;
					cord.push(new google.maps.Marker({
						// New marker
						position: center // Position for marker
					}));
				}
				
				alert(cord);
			}, 
			 "json"
		);
		
        // ============================ INFO WINDOW ============================ //
        var infowindow = new google.maps.InfoWindow({
            // New info window
            content:
                "<b>5 Marston Road</b><br><br>3 Bedroom property in South London" // Content for window
        });
        infowindow.open(map, marker); // Open info window

        // ============================ LOCATION ============================ //
        if (navigator.geolocation) {
            // If navigation
            navigator.geolocation.getCurrentPosition(initialize); // Get current position
        } else {
            // Else
            $("nogeolocation").innerHTML =
                "Geolocation is not supported by this browser."; // Set and display message
        }

        // Function to initialise user position
        function initialize(position) {
            //Get coordinates
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;

            // ============================ MAP ============================ //
            var currentPositionImage = ""; // Set current position
            var userPosition = new google.maps.Marker({
                // Set marker current position
                position: currentPosition,
                map: propertyMap, // Set map
                icon: currentPositionImage, // Set icon
                title: "You are here" // Set title message
            });
        }
    }
});
