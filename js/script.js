$(document).ready(function(){
    $('#home').height($(window).height());
    $('#login').height($(window).height() - $(".footer").height());

    function getKey(){
	    var text = "";
	    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	    for( var i=0; i < 12; i++ )
	        text += possible.charAt(Math.floor(Math.random() * possible.length));
	    return text;
    }
    //create room submission
    $('.create-room-btn').click(function(){ // when the button is clicked the code executes
		$('.error').hide(); // reset the error messages (hides them)
		var error = false; // we will set this true if the form isn't valid
		var data_string = $('.create-room').serialize(); // Collect data from form
		var randomKey = getKey();
		$.ajax({
			type: "POST",
			url: $('#create-room').attr('action'),
			data: data_string+"&key="+randomKey,
			timeout: 6000,
			error: function(request,error) {
				if (error == "timeout") {
					$('#err').fadeIn();
					$("#err").html('The request timed out. Please try again.'); 
				}
				else {
					$('#err').fadeIn();
					$("#err").html('An error occurred: ' + error + '');
				}
			},
			success: function() {
				$('.success').fadeIn();
				jQuery(".form-input").val("");
			}
		});
		return false; // stops user browser being directed to the php file
	});
});
