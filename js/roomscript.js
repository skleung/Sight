$(document).ready(function(){
	$(".sign-in-btn").click(function(event){
		$("form").hide();
		$("#map-canvas").fadeIn();
		return false;
	});
});