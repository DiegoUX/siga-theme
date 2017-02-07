(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// Mobile menu...
		$(".mobile-btn a").click(function(event) {
			$("#navigations").slideToggle(400);
		});
		
	});
	
})(jQuery, this);
