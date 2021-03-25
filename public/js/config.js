/*
	Mobile defaults.
	This function set page trainsistion to none and set theme to "a".
*/

$(document).bind('mobileinit', function() {
	$.mobile.defaultPageTransition = 'none'; // Set to none
	$.mobile.page.prototype.options.theme = "a"; // Set theme 
});
