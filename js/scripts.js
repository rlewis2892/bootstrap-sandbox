$(document).ready(function(){

	$("#search-selector").change(function() {
		var selector=$("#search-selector").val();
		$(".searchForm").hide();
		$("#" +selector).show();

		// load the user's location if location was selected
		/*if(selector === "location-search") {
			geoFindMe();
		}*/
	});

});