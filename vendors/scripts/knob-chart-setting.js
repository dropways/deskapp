$(".dial1").knob();
$({animatedVal: 0}).animate({animatedVal: 66}, {
	duration: 3000,
	easing: "swing",
	step: function() {
		$(".dial1").val(Math.ceil(this.animatedVal)).trigger("change");
	}
});
$(".dial2").knob();
$({animatedVal: 0}).animate({animatedVal: 75}, {
	duration: 3000,
	easing: "swing",
	step: function() {
		$(".dial2").val(Math.ceil(this.animatedVal)).trigger("change");
	}
});
$(".dial3").knob();
$({animatedVal: 0}).animate({animatedVal: 90}, {
	duration: 3000,
	easing: "swing",
	step: function() {
		$(".dial3").val(Math.ceil(this.animatedVal)).trigger("change");
	}
});
$(".dial4").knob();
$({animatedVal: 0}).animate({animatedVal: 35}, {
	duration: 3000,
	easing: "swing",
	step: function() {
		$(".dial4").val(Math.ceil(this.animatedVal)).trigger("change");
	}
});
$(".dial5").knob();