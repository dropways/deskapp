var options = {
	series: [80],
	grid: {
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0
		},
	},
	chart: {
		height: 100,
		width: 70,
		type: 'radialBar',
	},	
	plotOptions: {
		radialBar: {
			hollow: {
				size: '50%',
			},
			dataLabels: {
				name: {
					show: false,
					color: '#fff'
				},
				value: {
					show: true,
					color: '#333',
					offsetY: 5,
					fontSize: '15px'
				}
			}
		}
	},
	colors: ['#ecf0f4'],
	fill: {
		type: 'gradient',
		gradient: {
			shade: 'dark',
			type: 'diagonal1',
			shadeIntensity: 0.8,
			gradientToColors: ['#1b00ff'],
			inverseColors: false,
			opacityFrom: [1, 0.2],
			opacityTo: 1,
			stops: [0, 100],
		}
	},
	states: {
		normal: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		hover: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		active: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
	}
};

var options2 = {
	series: [70],
	grid: {
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0
		},
	},
	chart: {
		height: 100,
		width: 70,
		type: 'radialBar',
	},	
	plotOptions: {
		radialBar: {
			hollow: {
				size: '50%',
			},
			dataLabels: {
				name: {
					show: false,
					color: '#fff'
				},
				value: {
					show: true,
					color: '#333',
					offsetY: 5,
					fontSize: '15px'
				}
			}
		}
	},
	colors: ['#ecf0f4'],
	fill: {
		type: 'gradient',
		gradient: {
			shade: 'dark',
			type: 'diagonal1',
			shadeIntensity: 1,
			gradientToColors: ['#009688'],
			inverseColors: false,
			opacityFrom: [1, 0.2],
			opacityTo: 1,
			stops: [0, 100],
		}
	},
	states: {
		normal: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		hover: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		active: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
	}
};

var options3 = {
	series: [75],
	grid: {
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0
		},
	},
	chart: {
		height: 100,
		width: 70,
		type: 'radialBar',
	},	
	plotOptions: {
		radialBar: {
			hollow: {
				size: '50%',
			},
			dataLabels: {
				name: {
					show: false,
					color: '#fff'
				},
				value: {
					show: true,
					color: '#333',
					offsetY: 5,
					fontSize: '15px'
				}
			}
		}
	},
	colors: ['#ecf0f4'],
	fill: {
		type: 'gradient',
		gradient: {
			shade: 'dark',
			type: 'diagonal1',
			shadeIntensity: 0.8,
			gradientToColors: ['#f56767'],
			inverseColors: false,
			opacityFrom: [1, 0.2],
			opacityTo: 1,
			stops: [0, 100],
		}
	},
	states: {
		normal: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		hover: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		active: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
	}
};

var options4 = {
	series: [85],
	grid: {
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0
		},
	},
	chart: {
		height: 100,
		width: 70,
		type: 'radialBar',
	},	
	plotOptions: {
		radialBar: {
			hollow: {
				size: '50%',
			},
			dataLabels: {
				name: {
					show: false,
					color: '#fff'
				},
				value: {
					show: true,
					color: '#333',
					offsetY: 5,
					fontSize: '15px'
				}
			}
		}
	},
	colors: ['#ecf0f4'],
	fill: {
		type: 'gradient',
		gradient: {
			shade: 'dark',
			type: 'diagonal1',
			shadeIntensity: 0.8,
			gradientToColors: ['#2979ff'],
			inverseColors: false,
			opacityFrom: [1, 0.5],
			opacityTo: 1,
			stops: [0, 100],
		}
	},
	states: {
		normal: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		hover: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		active: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
	}
};


var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();

var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
chart3.render();

var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
chart4.render();
