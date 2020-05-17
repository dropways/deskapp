// chart 1
Highcharts.chart('chart1', {
	title: {
		text: 'Solar Employment Growth by Sector, 2010-2016'
	},
	subtitle: {
		text: 'Source: thesolarfoundation.com'
	},
	yAxis: {
		title: {
			text: 'Number of Employees'
		}
	},
	legend: {
		layout: 'vertical',
		align: 'right',
		verticalAlign: 'middle'
	},
	plotOptions: {
		series: {
			label: {
				connectorAllowed: false
			},
			pointStart: 2010
		}
	},
	series: [{
		name: 'Installation',
		data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
	}, {
		name: 'Manufacturing',
		data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
	}, {
		name: 'Sales & Distribution',
		data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
	}, {
		name: 'Project Development',
		data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
	}, {
		name: 'Other',
		data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
	}],
	responsive: {
		rules: [{
			condition: {
				maxWidth: 500
			},
			chartOptions: {
				legend: {
					layout: 'horizontal',
					align: 'center',
					verticalAlign: 'bottom'
				}
			}
		}]
	}
});

// chart 2
$.getJSON(
	'https://cdn.rawgit.com/highcharts/highcharts/057b672172ccc6c08fe7dbb27fc17ebca3f5b770/samples/data/usdeur.json',
	function (data) {

		Highcharts.chart('chart2', {
			chart: {
				zoomType: 'x'
			},
			title: {
				text: 'USD to EUR exchange rate over time'
			},
			subtitle: {
				text: document.ontouchstart === undefined ?
				'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
			},
			xAxis: {
				type: 'datetime'
			},
			yAxis: {
				title: {
					text: 'Exchange rate'
				}
			},
			legend: {
				enabled: false
			},
			plotOptions: {
				area: {
					fillColor: {
						linearGradient: {
							x1: 0,
							y1: 0,
							x2: 0,
							y2: 1
						},
						stops: [
						[0, Highcharts.getOptions().colors[0]],
						[1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
						]
					},
					marker: {
						radius: 2
					},
					lineWidth: 1,
					states: {
						hover: {
							lineWidth: 1
						}
					},
					threshold: null
				}
			},

			series: [{
				type: 'area',
				name: 'USD to EUR',
				data: data
			}]
		});
	}
	);

// chart 3
Highcharts.chart('chart3', {
	chart: {
		type: 'area'
	},
	title: {
		text: 'US and USSR nuclear stockpiles'
	},
	subtitle: {
		text: 'Sources: <a href="https://thebulletin.org/2006/july/global-nuclear-stockpiles-1945-2006">' +
		'thebulletin.org</a> &amp; <a href="https://www.armscontrol.org/factsheets/Nuclearweaponswhohaswhat">' +
		'armscontrol.org</a>'
	},
	xAxis: {
		allowDecimals: false,
		labels: {
			formatter: function () {
				return this.value;
			}
		}
	},
	yAxis: {
		title: {
			text: 'Nuclear weapon states'
		},
		labels: {
			formatter: function () {
				return this.value / 1000 + 'k';
			}
		}
	},
	tooltip: {
		pointFormat: '{series.name} had stockpiled <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
	},
	plotOptions: {
		area: {
			pointStart: 1940,
			marker: {
				enabled: false,
				symbol: 'circle',
				radius: 2,
				states: {
					hover: {
						enabled: true
					}
				}
			}
		}
	},
	series: [{
		name: 'USA',
		data: [
		null, null, null, null, null, 6, 11, 32, 110, 235,
		369, 640, 1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468,
		20434, 24126, 27387, 29459, 31056, 31982, 32040, 31233, 29224, 27342,
		26662, 26956, 27912, 28999, 28965, 27826, 25579, 25722, 24826, 24605,
		24304, 23464, 23708, 24099, 24357, 24237, 24401, 24344, 23586, 22380,
		21004, 17287, 14747, 13076, 12555, 12144, 11009, 10950, 10871, 10824,
		10577, 10527, 10475, 10421, 10358, 10295, 10104, 9914, 9620, 9326,
		5113, 5113, 4954, 4804, 4761, 4717, 4368, 4018
		]
	}, {
		name: 'USSR/Russia',
		data: [null, null, null, null, null, null, null, null, null, null,
		5, 25, 50, 120, 150, 200, 426, 660, 869, 1060,
		1605, 2471, 3322, 4238, 5221, 6129, 7089, 8339, 9399, 10538,
		11643, 13092, 14478, 15915, 17385, 19055, 21205, 23044, 25393, 27935,
		30062, 32049, 33952, 35804, 37431, 39197, 45000, 43000, 41000, 39000,
		37000, 35000, 33000, 31000, 29000, 27000, 25000, 24000, 23000, 22000,
		21000, 20000, 19000, 18000, 18000, 17000, 16000, 15537, 14162, 12787,
		12600, 11400, 5500, 4512, 4502, 4502, 4500, 4500
		]
	}]
});

// chart 4
Highcharts.chart('chart4', {
	chart: {
		type: 'column'
	},
	title: {
		text: 'Monthly Average Rainfall'
	},
	subtitle: {
		text: 'Source: WorldClimate.com'
	},
	xAxis: {
		categories: [
		'Jan',
		'Feb',
		'Mar',
		'Apr',
		'May',
		'Jun',
		'Jul',
		'Aug',
		'Sep',
		'Oct',
		'Nov',
		'Dec'
		],
		crosshair: true
	},
	yAxis: {
		min: 0,
		title: {
			text: 'Rainfall (mm)'
		}
	},
	tooltip: {
		headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
		pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
		'<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
		footerFormat: '</table>',
		shared: true,
		useHTML: true
	},
	plotOptions: {
		column: {
			pointPadding: 0.2,
			borderWidth: 0
		}
	},
	series: [{
		name: 'Tokyo',
		data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

	}, {
		name: 'New York',
		data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

	}, {
		name: 'London',
		data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

	}, {
		name: 'Berlin',
		data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

	}]
});

// chart 5
Highcharts.chart('chart5', {
	title: {
		text: 'Pie point CSS'
	},
	xAxis: {
		categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	},
	series: [{
		type: 'pie',
		allowPointSelect: true,
		keys: ['name', 'y', 'selected', 'sliced'],
		data: [
		['Apples', 29.9, false],
		['Pears', 71.5, false],
		['Oranges', 106.4, false],
		['Plums', 129.2, false],
		['Bananas', 144.0, false],
		['Peaches', 176.0, false],
		['Prunes', 135.6, true, true],
		['Avocados', 148.5, false]
		],
		showInLegend: true
	}]
});

// chart 6
Highcharts.chart('chart6', {
	chart: {
		type: 'pie',
		options3d: {
			enabled: true,
			alpha: 45
		}
	},
	title: {
		text: 'Contents of Highsoft\'s weekly fruit delivery'
	},
	subtitle: {
		text: '3D donut in Highcharts'
	},
	plotOptions: {
		pie: {
			innerSize: 100,
			depth: 45
		}
	},
	series: [{
		name: 'Delivered amount',
		data: [
		['Bananas', 8],
		['Kiwi', 3],
		['Mixed nuts', 1],
		['Oranges', 6],
		['Apples', 8],
		['Pears', 4],
		['Clementines', 4],
		['Reddish (bag)', 1],
		['Grapes (bunch)', 1]
		]
	}]
});

// chart 7
Highcharts.chart('chart7', {
	chart: {
		type: 'gauge',
		plotBackgroundColor: null,
		plotBackgroundImage: null,
		plotBorderWidth: 0,
		plotShadow: false
	},
	title: {
		text: 'Speedometer'
	},
	pane: {
		startAngle: -150,
		endAngle: 150,
		background: [{
			backgroundColor: {
				linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
				stops: [
				[0, '#FFF'],
				[1, '#333']
				]
			},
			borderWidth: 0,
			outerRadius: '109%'
		}, {
			backgroundColor: {
				linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
				stops: [
				[0, '#333'],
				[1, '#FFF']
				]
			},
			borderWidth: 1,
			outerRadius: '107%'
		}, {
		}, {
			backgroundColor: '#DDD',
			borderWidth: 0,
			outerRadius: '105%',
			innerRadius: '103%'
		}]
	},
	yAxis: {
		min: 0,
		max: 200,

		minorTickInterval: 'auto',
		minorTickWidth: 1,
		minorTickLength: 10,
		minorTickPosition: 'inside',
		minorTickColor: '#666',

		tickPixelInterval: 30,
		tickWidth: 2,
		tickPosition: 'inside',
		tickLength: 10,
		tickColor: '#666',
		labels: {
			step: 2,
			rotation: 'auto'
		},
		title: {
			text: 'km/h'
		},
		plotBands: [{
			from: 0,
			to: 120,
			color: '#55BF3B'
		}, {
			from: 120,
			to: 160,
			color: '#DDDF0D'
		}, {
			from: 160,
			to: 200,
			color: '#DF5353'
		}]
	},
	series: [{
		name: 'Speed',
		data: [80],
		tooltip: {
			valueSuffix: ' km/h'
		}
	}]
},
function (chart) {
	if (!chart.renderer.forExport) {
		setInterval(function () {
			var point = chart.series[0].points[0],
			newVal,
			inc = Math.round((Math.random() - 0.5) * 20);

			newVal = point.y + inc;
			if (newVal < 0 || newVal > 200) {
				newVal = point.y - inc;
			}

			point.update(newVal);

		}, 3000);
	}
});

// chart 8
Highcharts.chart('chart8', {
	chart: {
		type: 'boxplot'
	},
	title: {
		text: 'Highcharts Box Plot Example'
	},
	legend: {
		enabled: false
	},
	xAxis: {
		categories: ['1', '2', '3', '4', '5'],
		title: {
			text: 'Experiment No.'
		}
	},
	yAxis: {
		title: {
			text: 'Observations'
		},
		plotLines: [{
			value: 932,
			color: 'red',
			width: 1,
			label: {
				text: 'Theoretical mean: 932',
				align: 'center',
				style: {
					color: 'gray'
				}
			}
		}]
	},
	series: [{
		name: 'Observations',
		data: [
		[760, 801, 848, 895, 965],
		[733, 853, 939, 980, 1080],
		[714, 762, 817, 870, 918],
		[724, 802, 806, 871, 950],
		[834, 836, 864, 882, 910]
		],
		tooltip: {
			headerFormat: '<em>Experiment No {point.key}</em><br/>'
		}
	}, {
		name: 'Outlier',
		color: Highcharts.getOptions().colors[0],
		type: 'scatter',
		data: [
		[0, 644],
		[4, 718],
		[4, 951],
		[4, 969]
		],
		marker: {
			fillColor: 'white',
			lineWidth: 1,
			lineColor: Highcharts.getOptions().colors[0]
		},
		tooltip: {
			pointFormat: 'Observation: {point.y}'
		}
	}]

});