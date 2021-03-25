/*
	Property List.
	Displays property list from json file.
*/

$(document).on("pagecontainerbeforeshow", function(e, ui) {
    var page = ui.toPage[0].id;
    if (page == "list-property-page") {
        // If page is equal to string
        getList("#propertyList"); // Get list
    }

    /* 
	Function to get list
	Arguement is housing type and element id to display content
*/
    function getList(propertyList) {
        $.get(
            "data/accommodation/properties.json",
            function(result) {
                // Get data from file
                var properties = ""; // Set variable to empty string
                for (var i = 0; i < result.length; i++) {
                    // For length of result
                    var propertyId = result[i]; // Set id

                    properties +=
                        "<li><a href='/viewproperty?id=" +
                        result[i].id +
                        "' data-transition='slide'><img src='images/houses/" +
                        result[i].thumbnail +
                        "' class='property-image'><span class='property-name'>" +
                        result[i].name +
                        "</span>" +
                        "<p><span class='property-short-description'>" +
                        result[i].shortdescription +
                        "</span></p><p><span class='property-price'>" +
                        result[i].price +
                        "</p></a></li>";
                }
                $(propertyList)
                    .html(properties)
                    .listview("refresh"); // Insert content to element and refresh listview
            },
            "json"
        );
    }
});
