$("#range_01").ionRangeSlider({
	min: 0,
	max: 100,
	from: 50,
	type: "single",
	grid: true,
	prefix: "$"
});
$("#range_01_1").ionRangeSlider({
	min: 0,
	max: 100,
	from: 25,
	to: 75,
	to_min: 60,
	to_max: 90,
	to_shadow: true,
	type: "double",
	grid: true,
	prefix: "$"
});
$("#range_02").ionRangeSlider({
	type: "double",
	grid: true,
	min: -1000,
	max: 1000,
	from: -500,
	to: 500,
	prefix: "$",
	skin: "round",
	type: "single",
});
$("#range_02_1").ionRangeSlider({
	type: "double",
	grid: true,
	min: -1000,
	max: 1000,
	from: -500,
	to: 500,
	prefix: "$",
	skin: "round"
});
$("#range_03").ionRangeSlider({
	type: "double",
	grid: true,
	from: 1,
	to: 5,
	skin: "modern",
	type: "single",
	values: [0, 10, 100, 500, 1000, 10000]
});
$("#range_03_1").ionRangeSlider({
	type: "double",
	grid: true,
	from: 1,
	to: 5,
	skin: "modern",
	values: [0, 10, 100, 500, 1000, 10000]
});
$("#range_04").ionRangeSlider({
	grid: true,
	min: 1000,
	max: 1000000,
	from: 400000,
	step: 1000,
	skin: "sharp",
	type: "single",
	prettify_enabled: true,
	prettify: function (num) {
		return (Math.random() * num).toFixed(0);
	}
});
$("#range_04_1").ionRangeSlider({
	grid: true,
	min: 1000,
	max: 1000000,
	from: 400000,
	step: 1000,
	skin: "sharp",
	prettify_enabled: true,
	prettify: function (num) {
		return (Math.random() * num).toFixed(0);
	}
});
$("#range_05").ionRangeSlider({
	type: "single",
	min: 1000,
	max: 2000,
	from: 1200,
	to: 1800,
	skin: "square",
	hide_min_max: true,
	hide_from_to: false,
	grid: false
});
$("#range_05_1").ionRangeSlider({
	type: "double",
	min: 1000,
	max: 2000,
	from: 1200,
	to: 1800,
	skin: "square",
	hide_min_max: true,
	hide_from_to: false,
	grid: false
});