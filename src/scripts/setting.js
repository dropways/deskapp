jQuery(window).on("load",function() {
	"use strict";
	//jQuery(".pre-loader").fadeToggle("medium");
});
jQuery(document).ready(function(){
	"use strict";

	// Dropdown Slide Animation
	$('.dropdown').on('show.bs.dropdown', function(e){
		$(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
	});
	$('.dropdown').on('hide.bs.dropdown', function(e){
		$(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
	});
});