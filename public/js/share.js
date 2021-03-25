/*
	Share to social media.
	When user clicks/taps element, insert string to html
*/

$(document).on("pagecreate", "#index-page", function() {
    
	// Instragram
	$("#instagram").bind("tap", function () { // Tap function
		$("#sharechannel").html("Instagram"); // Insert string to html
	});
    
	// Facebook
	$("#facebook").bind("tap", function () { // Tap function
		$("#sharechannel").html("Facebook"); // Insert string to html
	});
    
	// Twittre
	$("#twitter").bind("tap", function () { // Tap function
		$("#sharechannel").html("Twitter"); // Insert string to html
	});
    
	// LinkedIn
	$("#linkedin").bind("tap", function () { // Tap function
		$("#sharechannel").html("LinkedIn"); // Insert string to html
	});
});