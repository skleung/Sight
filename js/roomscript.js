$(document).ready(function(){
	$(".sign-in-btn").click(function(event){
		$("form").hide();
		$("#map-canvas").css({'z-index':'5'});
		return false;
	});
});