$(document).ready(function(){
    $('#home').height($(window).height());
    $('#login').height($(window).height());
    $('#about').height($(window).height() - $(".footer").height());

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
		var form_string = $('.create-room').serialize(); // Collect data from form
		var randomKey = getKey();
		var data_string = form_string+"&roomkey="+randomKey;
		alert("data_string = "+data_string);
		$.ajax({
			type: "POST",
			url: $('#create-room').attr('action'),
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
				var roomLink = "room.php?roomkey="+randomKey;
				$('.link').html("<a href = '"+roomLink+"'>"+roomLink+"</a>");
				$('.link-container').slideDown();
				$('.success').fadeIn();
				jQuery(".form-input").val("");
			}
		});
		return false; // stops user browser being directed to the php file
	});


	//Scrolling animation
	$(".scroll").click(function(event){
		event.preventDefault();
		var full_url = this.href;
		var parts = full_url.split("#");
		var trgt = parts[1];
		var target_offset = $("#" + trgt).offset();
		var target_top = target_offset.top;

		//goto that anchor by setting the body scroll top to anchor top
		$('html, body').animate({scrollTop: target_top}, 400);
	});
});
