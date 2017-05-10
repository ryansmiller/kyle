(function ($) {
  
	$(document).ready(function(){
	    
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

	});

}(jQuery));