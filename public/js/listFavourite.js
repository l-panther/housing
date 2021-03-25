/*
	Share to social media.
	When user clicks/taps element, insert string to html
*/

$(document).on("pagecontainerbeforeshow", function(e, ui) {
    var page = ui.toPage[0].id,
        property = ""; // Set variables

    if (page == "list-favourite-page") {
        // If page is equal to string

        var favourites = JSON.parse(localStorage.getItem("favourites")); // Get data from local storage
        displayList(favourites); // Display list

        /*
			Display property list.
			Argument is array from local storage
			If array is null or empty array, display message
			Else, for each element in array, set variable value
			Insert data and refresh list
		*/
        function displayList(favourites) {
            var property = "",
                inputSearch = $(".ui-input-search"); // Variable

            if (favourites == null || favourites == []) {
                // If favourites is null or empty array
                inputSearch.hide();
                property =
                    '<p class="w3-center" id="favEmpty">You currently have no favourites saved.</p>'; // Display message
            } else if (favourites != null) {
                // Else
                inputSearch.show();
                for (var i = 0; i < favourites.length; i++) {
                    // For each element in array
                    property +=
                        "<li> \
							<a href='/viewfavourite?id=" + favourites[i].propertyId + "'>" + (parseInt(i) + 1) + ". " +
                        favourites[i].propertyName +
                        	"</a> \
						</li>"; // Set variable value
                }
            }

            $("#favlist")
                .html(property)
                .listview("refresh"); // Insert data and refresh list
        }
    }
});
