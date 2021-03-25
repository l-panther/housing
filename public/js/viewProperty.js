/*
	Show property content.
	Get selected property data from json file and display relevant information
*/

$(document).on("pagecontainerbeforeshow", function(e, ui) {
    var page = ui.toPage[0].id;
    if (page == "view-property-page") {
        // If page is equal to string
        var thisPage = "#" + page; // Set current page
        var thisUrl = $(location).attr("search"); // Get url
        var thisId = thisUrl.split("=")[1]; // Set id

        $.get(
            "data/accommodation/properties.json",
            function(result) {
                // Get data from json file
                for (var i = 0; i < result.length; i++) {
                    // For length of result

                    if (result[i].id == thisId) {
                        // If property type is equal to housing type, set string to display results

                        $("#property-id", thisPage).html(result[i].id); // Property id
                        $("#property-type", thisPage).text(result.type); // Property type
                        var property =
                            "<div class='property-image'> \
								<img src='images/houses/" + result[i].images[0].imageslide + "' alt='Outside view of property' id='property-img'> \
							</div> \
							<div class='alert'></div> \
							<div class='w3-container details-container'> \
								<div class='property-name w3-margin-top w3-margin-bottom'>" + result[i].name + "<span class='w3-right'><a href='/map' title='View in map'><i class='material-icons'>location_on</i></a></span></div> \
								<div class='property-name w3-margin-top w3-margin-bottom'>" + result[i].price + "</div> \
								<div class='w3-row w3-center property-description'> \
                            		<div class='w3-col s4'> \
										<i class='fa fa-bed w3-block'></i> \
										<p>" + result[i].bedrooms + "</p> \
                            		</div> \
									<div class='w3-col s4'> \
										<i class='fa fa-bath w3-block'></i> \
										<p>" + result[i].bathroom + "</p> \
                            		</div> \
									<div class='w3-col s4'> \
										<i class='fa fa-car w3-block'></i> \
										<p>" + result[i].garage + "</p> \
                            		</div> \
								</div> \
								<div class='w3-margin-top long-description'> \
									<p>" + result[i].description + "</p> \
								</div> \
							</div>"; // Property content to display
                    }
                }
                $("#display-content", thisPage).html(property); // Insert property content to element
            },
            "json"
        );
    }
});
