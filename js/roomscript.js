$(document).ready(function(){
	$(".form-signin").submit(function(event){
		$("form").hide();
		$("#map-canvas").css({'z-index':'5'});
		return false;
	});
});