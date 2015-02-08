(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// add active class to nav to display onclick
		$(".menu").on("click", function(){
			$(".nav, main, .footer, .header").toggleClass("active");
		});
		
	});
	
})(jQuery, this);
