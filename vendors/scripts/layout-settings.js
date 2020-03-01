(function() {
	'use strict';
	$(document).ready(function() {

		// Store object for local storage data
		var currentOptions = {
			headerBackground: "header-white",
			navigationBackground: "sidebar-dark",
		}

		/**
		 * Get local storage value
		 */
		 function getOptions() {
			return JSON.parse(localStorage.getItem("optionsObject"))
		 }

		/**
		 * Set local storage property value
		 */
		 function setOptions(propertyName, propertyValue) {

			//Store in local storage
			var optionsCopy = Object.assign({}, currentOptions);
			optionsCopy[propertyName] = propertyValue

			//Store in local storage
			localStorage.setItem("optionsObject", JSON.stringify(optionsCopy));
		}

		if (getOptions() != null) {
			currentOptions = getOptions()
		} else {
			localStorage.setItem("optionsObject", JSON.stringify(currentOptions));
		}

		/**
		 * Clear local storage
		 */
		 function clearOptions() {
			localStorage.removeItem("optionsObject");
		 }

		// Set localstorage value to variable
		if (getOptions() != null) {
			currentOptions = getOptions()
		} else {
			localStorage.setItem("optionsObject", JSON.stringify(currentOptions));
		}

		//Layout settings visible
		$('[data-toggle="right-sidebar"]').on('click', function() {
			jQuery('.right-sidebar').addClass('right-sidebar-visible');
		});

		//THEME OPTION CLOSE BUTTON
		$('[data-toggle="right-sidebar-close"]').on('click', function() {
			jQuery('.right-sidebar').removeClass('right-sidebar-visible');
		})

		//VARIABLE
		var body = jQuery('body');


		// Header Background
		var header_dark = jQuery('.header-dark');
		var header_light = jQuery('.header-white');

		header_dark.click(function() {
			'use strict';
			jQuery(this).addClass('active');
			header_light.removeClass('active');
			body.removeClass('header-white').addClass('header-dark');

			//Store in local storage
			setOptions("headerBackground", "header-dark")
		});

		//Click for current options
		if (currentOptions.headerBackground === "header-dark") {
			header_dark.trigger("click");
		}

		header_light.click(function() {
			'use strict';
			jQuery(this).addClass('active');
			header_dark.removeClass('active');
			body.removeClass('header-dark').addClass('header-white');

			//Store in local storage
			setOptions("headerBackground", "header-white")
		});

		//Click for current options
		if (currentOptions.headerBackground === "header-white") {
			header_light.trigger("click")
		}

		// Sidebar Background
		var sidebar_dark = jQuery('.sidebar-dark');
		var sidebar_light = jQuery('.sidebar-light');

		sidebar_dark.click(function() {
			'use strict';
			jQuery(this).addClass('active');
			sidebar_light.removeClass('active');
			body.removeClass('sidebar-light').addClass('sidebar-dark');

			//Store in local storage
			setOptions("navigationBackground", "sidebar-dark")
		});

		//Click for current options
		if (currentOptions.navigationBackground === "sidebar-dark") {
			sidebar_dark.trigger("click")
		}

		sidebar_light.click(function() {
			'use strict';
			jQuery(this).addClass('active');
			sidebar_dark.removeClass('active');
			body.removeClass('sidebar-dark').addClass('sidebar-light');

			//Store in local storage
			setOptions("navigationBackground", "sidebar-light")
		});

		//Click for current options
		if (currentOptions.navigationBackground === "sidebar-light") {
			sidebar_light.trigger("click")
		}


		$('#reset-settings').click(function() {
			clearOptions();
			location.reload();
		});

		

	});

})()