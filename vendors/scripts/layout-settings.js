(function() {
	'use strict';
	$(document).ready(function() {

		// Store object for local storage data
		var currentOptions = {
			headerBackground: "header-white",
			navigationBackground: "sidebar-dark",
			menuDropdownIcon: 'icon-style-1',
			menuListIcon: 'icon-list-style-1',
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
		var left_sidebar = jQuery('.left-side-bar');


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

		// Menu Dropdown Icon
		$('input:radio[name=menu-dropdown-icon]').change(function(){
			// var className = $('input:radio[name=menu-dropdown-icon]:checked').val().toLowerCase().replace(/\s+/, "-");
			// $(".sidebar-menu").attr('class', 'sidebar-menu ' + className);
			// setOptions("menuDropdownIcon", className);
			var newClass1 = ['sidebar-menu'];
			newClass1.push( $('input:radio[name=menu-dropdown-icon]:checked').val().toLowerCase().replace(/\s+/, "-") );
			newClass1.push( $('input:radio[name=menu-list-icon]:checked').val().toLowerCase().replace(/\s+/, "-") );
			$(".sidebar-menu").attr('class', newClass1.join( ' ' ) );
			setOptions("menuDropdownIcon", newClass1.slice(-2)[0] );
		});
		if (currentOptions.menuDropdownIcon === "icon-style-1") {
			$('input:radio[value=icon-style-1]').trigger("click")
		}
		if (currentOptions.menuDropdownIcon === "icon-style-2") {
			$('input:radio[value=icon-style-2]').trigger("click")
		}
		if (currentOptions.menuDropdownIcon === "icon-style-3") {
			$('input:radio[value=icon-style-3]').trigger("click")
		}

		// Menu List Icon
		$('input:radio[name=menu-list-icon]').change(function() {
			var newClass = ['sidebar-menu'];
			newClass.push( $('input:radio[name=menu-dropdown-icon]:checked').val().toLowerCase().replace(/\s+/, "-") );
			newClass.push( $('input:radio[name=menu-list-icon]:checked').val().toLowerCase().replace(/\s+/, "-") );
			$(".sidebar-menu").attr('class', newClass.join( ' ' ) );
			setOptions("menuListIcon", newClass.slice(-1)[0] );
		});
		if (currentOptions.menuListIcon === "icon-list-style-1") {
			$('input:radio[value=icon-list-style-1]').trigger("click")
		}
		if (currentOptions.menuListIcon === "icon-list-style-2") {
			$('input:radio[value=icon-list-style-2]').trigger("click")
		}
		if (currentOptions.menuListIcon === "icon-list-style-3") {
			$('input:radio[value=icon-list-style-3]').trigger("click")
		}
		if (currentOptions.menuListIcon === "icon-list-style-4") {
			$('input:radio[value=icon-list-style-4]').trigger("click")
		}
		if (currentOptions.menuListIcon === "icon-list-style-5") {
			$('input:radio[value=icon-list-style-5]').trigger("click")
		}
		if (currentOptions.menuListIcon === "icon-list-style-6") {
			$('input:radio[value=icon-list-style-6]').trigger("click")
		}


		$('#reset-settings').click(function() {
			clearOptions();
			location.reload();
		});

		

	});

})()