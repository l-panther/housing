$(document).on("pagecontainerbeforeshow", function(e, ui) {
    var page = ui.toPage[0].id, count = "";

    if (page == "index-page" || page == "account-page") {
		var favourites = JSON.parse(localStorage.getItem("favourites")); // Get data from local storage
		// console.log(favourites.length);
		
		if (favourites == null || favourites == []) {
			count = "0";
			$("#countFavAcc").html(count);
			return;
		} else if(favourites.length > 0) {
			count = "<div class='w3-badge'>" + favourites.length + "</div>";
			$("#countFav").html(count);
		}
	}
});
