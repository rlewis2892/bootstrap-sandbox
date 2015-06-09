$(document).ready(function(){

	/*jQuery fadeIn*/
	/*$('main').hide().fadeIn(2000)*/;
	$('main, header, footer').hide().fadeIn(3000);

	/*jQuery slideToggle*/
	$("#question").click(function(){
		$("#answer").slideToggle("slow");
	});

});