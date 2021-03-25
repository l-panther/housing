/*
	Add Property to favourite.
	This function will add the selected property to the local storage of user.
*/

$(document).on("pagecreate", "#view-property-page", function() {
    // On page creation, select page.

    $("#addfav-btn").click(function() {
        // Click function buttion
        if (typeof Storage != "undefined") {
            // If storage not undefined
            addFav(); // Add to favourites
        } else {
            // Else
            $("#nostorage").text("Your device does not support local storage"); // Display message to user
        }
    });

    /*  
		Function to add to property to favourites.
		Get local stroage or create empty array.
		Create property object.
		Check if property exists in array.
		If property exists, set message.
		Else add to array and display message.

	*/
    function addFav() {
        var favourites = JSON.parse(localStorage.getItem("favourites")) || [], // Get local stroage or create empty array.
            thisPage = window.location.href, // Get current page = #property-page
            propertyId = $("#property-id"), // Property id
            propertyName = $(".property-name"), // Property id
            link = thisPage.split("=")[1],
            propertySrc = $("#property-img").attr("src"),
            propertyImage = propertySrc.split("/")[1],
            imageId = propertyImage.split(".")[0],
            message = "",
            propertyObj = {
                // Property object with attributes
                propertyId: $("#property-id").text(),
                propertyName: $(".property-name").text()
            },
            propertyExists = checkExists(favourites, propertyObj.propertyId); // Check exists
        // alert(propertyId);
        // alert(propertyName);
        // alert(thisPage);
        //alert(propertyObj.propertyId);
        //alert(propertyObj.propertyName);

        if (propertyExists == true) {
            // If property exists
            message = '<p class="w3-container w3-red">Already saved.</p>'; // Display message
        } else {
            // Else
            favourites.push(propertyObj); // Add property to favourites
            localStorage.setItem("favourites", JSON.stringify(favourites)); // Set local storage
            message =
                '<p class="w3-container w3-green">Added to favourites.</p>'; // Display message
        }
        $(".alert").html(message);
        $(".alert").fadeIn(1000);
        $(".alert").fadeOut(5000);
    }

    /*  
		Function to check if property exists in storage.
		Arguments are the property type and property name.
		For each increment of properties, if property is equal to string.
		Found is true. (Default found is false).
		Return found.
	*/
    function checkExists(favourites, propertyId) {
        var found = false; // Found is false
        for (var i = 0; i < favourites.length; i++) {
            // For each increment in favourites
            if (favourites[i].propertyId == propertyId) {
                // If object name is equal to property name
                found = true; // Found is true
                break; // Break
            }
        }
        return found; // Return found
    }
});
