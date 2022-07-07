jQuery(document).ready(function () {
	jQuery("#add-event").submit(function () {
		alert("Submitted");
		var values = {};
		$.each($("#add-event").serializeArray(), function (i, field) {
			values[field.name] = field.value;
		});
		console.log(values);
	});
});

(function () {
	"use strict";
	// ------------------------------------------------------- //
	// Calendar
	// ------------------------------------------------------ //
	jQuery(function () {
		// page is ready
		jQuery("#calendar").fullCalendar({
			themeSystem: "bootstrap4",
			// emphasizes business hours
			businessHours: false,
			defaultView: "month",
			// event dragging & resizing
			editable: true,
			// header
			header: {
				left: "title",
				center: "month,agendaWeek,agendaDay",
				right: "today prev,next",
			},
			events: [
				{
					title: "Barber",
					description:
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.",
					start: "2023-05-05",
					end: "2023-05-05",
					className: "fc-bg-default",
					icon: "circle",
				},
				{
					title: "Flight Paris",
					description:
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.",
					start: "2022-08-08T14:00:00",
					end: "2022-08-08T20:00:00",
					className: "fc-bg-deepskyblue",
					icon: "cog",
					allDay: false,
				},
				{
					title: "Team Meeting",
					description:
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.",
					start: "2022-07-10T13:00:00",
					end: "2022-07-10T16:00:00",
					className: "fc-bg-pinkred",
					icon: "group",
					allDay: false,
				},
				{
					title: "Meeting",
					description:
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.",
					start: "2022-08-12",
					className: "fc-bg-lightgreen",
					icon: "suitcase",
				},
				{
					title: "Conference",
					description:
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.",
					start: "2022-08-13",
					end: "2022-08-15",
					className: "fc-bg-blue",
					icon: "calendar",
				},
				{
					title: "Baby Shower",
					description:
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.",
					start: "2022-07-13",
					end: "2022-07-14",
					className: "fc-bg-default",
					icon: "child",
				},
				{
					title: "Birthday",
					description:
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.",
					start: "2022-09-13",
					end: "2022-09-14",
					className: "fc-bg-default",
					icon: "birthday-cake",
				},
				{
					title: "Restaurant",
					description:
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.",
					start: "2022-10-15T09:30:00",
					end: "2022-10-15T11:45:00",
					className: "fc-bg-default",
					icon: "glass",
					allDay: false,
				},
				{
					title: "Dinner",
					description:
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.",
					start: "2022-11-15T20:00:00",
					end: "2022-11-15T22:30:00",
					className: "fc-bg-default",
					icon: "cutlery",
					allDay: false,
				},
				{
					title: "Shooting",
					description:
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.",
					start: "2022-08-25",
					end: "2022-08-25",
					className: "fc-bg-blue",
					icon: "camera",
				},
				{
					title: "Go Space :)",
					description:
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.",
					start: "2022-12-27",
					end: "2022-12-27",
					className: "fc-bg-default",
					icon: "rocket",
				},
				{
					title: "Dentist",
					description:
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.",
					start: "2022-12-29T11:30:00",
					end: "2022-12-29T012:30:00",
					className: "fc-bg-blue",
					icon: "medkit",
					allDay: false,
				},
			],
			dayClick: function () {
				jQuery("#modal-view-event-add").modal();
			},
			eventClick: function (event, jsEvent, view) {
				jQuery(".event-icon").html("<i class='fa fa-" + event.icon + "'></i>");
				jQuery(".event-title").html(event.title);
				jQuery(".event-body").html(event.description);
				jQuery(".eventUrl").attr("href", event.url);
				jQuery("#modal-view-event").modal();
			},
		});
	});
})(jQuery);
