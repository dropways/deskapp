jQuery(window).on("load",function() {
	"use strict";
	//jQuery(".pre-loader").fadeToggle("medium");
	// bootstrap wysihtml5
	$('.textarea_editor').wysihtml5({
		html: true
	});
});
jQuery(window).on("load resize", function () {
	$(".customscroll").mCustomScrollbar({
		theme: "minimal-dark"
	});
});
jQuery(document).ready(function(){
	"use strict";

	// form-control on focus add class
	$(".form-control").on('focus',function(){
		$(this).parent().addClass("focus");
	})
	$(".form-control").on('focusout',function(){
		$(this).parent().removeClass("focus");
	})

	// Dropdown Slide Animation
	$('.dropdown').on('show.bs.dropdown', function(e){
		$(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
	});
	$('.dropdown').on('hide.bs.dropdown', function(e){
		$(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
	});

	// sidebar menu icon
	$('.menu-icon').click(function(){
		$(this).toggleClass('open');
		$('.left-side-bar').toggleClass('open');
	});

	var w = $(window).width();
	$(document).on('touchstart click', function(e){
		if($(e.target).parents('.left-side-bar').length == 0 && !$(e.target).is('.menu-icon, .menu-icon span'))
		{
			$('.left-side-bar').removeClass('open');
			$('.menu-icon').removeClass('open');
		};
	});
	$(window).on('resize', function() {
		var w = $(window).width();
		if ($(window).width() > 1200) {
			$('.left-side-bar').removeClass('open');
			$('.menu-icon').removeClass('open');
		}
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