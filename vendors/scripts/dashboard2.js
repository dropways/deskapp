$(".dial1").knob();
$({animatedVal: 0}).animate({animatedVal: 80}, {
	duration: 3000,
	easing: "swing",
	step: function() {
		$(".dial1").val(Math.ceil(this.animatedVal)).trigger("change");
	}
});

$(".dial2").knob();
$({animatedVal: 0}).animate({animatedVal: 70}, {
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
$({animatedVal: 0}).animate({animatedVal: 65}, {
	duration: 3000,
	easing: "swing",
	step: function() {
		$(".dial4").val(Math.ceil(this.animatedVal)).trigger("change");
	}
});
// map
jQuery('#browservisit').vectorMap({
	map: 'world_mill_en',
	backgroundColor: '#fff',
	borderWidth: 1,
	zoomOnScroll : false,
	color: '#ddd',
	regionStyle: {
		initial: {
			fill: '#fff'
		}
	},
	enableZoom: true,
	normalizeFunction: 'linear',
	showTooltip: true
});
// chart
Highcharts.chart('chart', {
	chart: {
		type: 'line'
	},
	title: {
		text: ''
	},
	xAxis: {
		categories: ['jan 01', 'jan 05', 'jan 10', 'jan 15', 'jan 20', 'jan 25', 'jan 30'],
		labels: {
			style: {
				color: '#1b00ff',
				fontSize: '12px',
			}
		}
	},
	yAxis: {
		labels: {
			formatter: function () {
				return this.value;
			},
			style: {
				color: '#1b00ff',
				fontSize: '14px'
			}
		},
		title: {
			text: ''
		},
	},
	credits: {
		enabled: false
	},
	tooltip: {
		crosshairs: true,
		shared: true
	},
	plotOptions: {
		spline: {
			marker: {
				radius: 10,
				lineColor: '#1b00ff',
				lineWidth: 2
			}
		}
	},
	legend: {
		align: 'center',
		x: 0,
		y: 0
	},
	series: [{
		name: 'Twitter',
		color: '#00789c',
		marker: {
			symbol: 'circle'
		},
		data: [0, 10, 5, 30, 40, 20, 10]
	},
	{
		name: 'Facebook',
		color: '#236adc',
		marker: {
			symbol: 'circle'
		},
		data: [40, 20, 10, 40, 15, 15, 20]
	},
	{
		name: 'Chat',
		color: '#ff686b',
		marker: {
			symbol: 'circle'
		},
		data: [0, 15, 5, 30, 40, 30, 28]
	},
	{
		name: 'Forum',
		color: '#264653',
		marker: {
			symbol: 'circle'
		},
		data: [35, 25, 10, 40, 15, 5, 38]
	}]
});
Highcharts.chart('compliance-trend', {
	chart: {
		type: 'column'
	},
	colors: ['#0051bd', '#00eccf', '#d11372'],
	title: {
		text: ''
	},
	credits: {
		enabled: false
	},
	xAxis: {
		categories: ['1th Sep', '2th Sep', '3th Sep', '4th Sep', '5th Sep', '6th Sep', '7th Sep', '8th Sep', '9th Sep', '10th Sep'],
		crosshair: true,
		lineWidth:1,
		lineColor: '#979797',
		labels: {
			style: {
				fontSize: '10px',
				color: '#5a5a5a'
			}
		},
	},
	yAxis: {
		min: 0,
		max: 100,
		gridLineWidth: 0,
		lineWidth:1,
		lineColor: '#979797',
		title: {
			text: ''
		},
		stackLabels: {
			enabled: false,
			style: {
				fontWeight: 'bold',
				color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
			}
		}
	},
	legend: {
		enabled: true
	},
	tooltip: {
		headerFormat: '<b>{point.x}</b><br/>',
		pointFormat: '{series.name}: {point.y}'
	},
	plotOptions: {
		column: {
			stacking: 'normal',
			dataLabels: {
				enabled: false,
				color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
			},
			borderWidth: 0
		}
	},
	series: [{
		name: 'Success',
		maxPointWidth: 10,
		data: [50, 30, 40, 70, 20, 50, 30, 40, 70, 20,]
	}, {
		name: 'Warning',
		maxPointWidth: 10,
		data: [0, 20, 30, 20, 10, 50, 30, 40, 10, 20,]
	}, {
		name: 'Error',
		maxPointWidth: 10,
		data: [50, 50, 30, 10, 70, 0, 40, 20, 20, 60,]
	}]
});