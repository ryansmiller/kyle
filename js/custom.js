jQuery(document).ready(function( $ ){
	    
	$(".home .home-welcome-widget").hide();
	$('.home .home-welcome-widget').fadeIn();

	$(".single").hide();
	$('.single').fadeIn();


	// hide .navbar first
	$(".home .navbar").hide();
	
	// fade in .navbar
	$(function () {
		$(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
			if ($(this).scrollTop() > 100) {
				$('.home .navbar').fadeIn();
			} else {
				$('.home .navbar').fadeOut();
			}
		});

	
	});

	$('form').find(".sendgrid_mc_input_email").each(function(ev) {
  		if(!$(this).val()) { 
 			$(this).attr("placeholder", "Enter Email Address...");
			}
		});


});