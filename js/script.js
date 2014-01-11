$(document).ready(function(){
    $('#home').height($(window).height());
    $('#login').height($(window).height() - $(".footer").height());


    //create room submission
    $('.create-room').click(function(){ // when the button is clicked the code executes
		$('.error').hide(); // reset the error messages (hides them)
		var error = false; // we will set this true if the form isn't valid
		var data_string = $('#create-room').serialize(); // Collect data from form
		$.ajax({
			type: "POST",
			url: $('#contact-form').attr('action'),
			data: data_string,
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
