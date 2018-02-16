jQuery(window).on("load",function() {
	"use strict";
	//jQuery(".pre-loader").fadeToggle("medium");
});
jQuery(window).on("load resize", function () {
	$(".customscroll").mCustomScrollbar({
		theme: "minimal-dark"
	});
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

	// sidebar menu accordion
	$("#accordion-menu li a.dropdown-toggle").click(function () {
		var current_li = $(this).parent();
		$("#accordion-menu li ul").each(function (i, el) {
			if ($(el).parent().is(current_li)) {
				$(el).prev().parent().toggleClass("show");
				$(el).slideToggle();
			} else {
				$(el).prev().parent().removeClass("show");
				$(el).slideUp();
			}
		});
	});
	// sidebar menu Active Class
	$('#accordion-menu .submenu li').each(function(){
		var vars = window.location.href.split("/").pop();
		$(this).find('a[href="'+vars+'"]').addClass('active');
	});
});