(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// Mobile menu...
		$(".mobile-btn a").click(function(event) {
			$("#navigations").slideToggle(400);
		});

		// Smooth scroll effect...
		$('.contact a').each(function() {
		  $(this).attr('data-scroll', '');
		});

		smoothScroll.init({
		    offset: 98 // Integer. How far to offset the scrolling anchor location in pixels
		});

		$('.wagwep-container').addClass("container");
		
	});
	
})(jQuery, this);
