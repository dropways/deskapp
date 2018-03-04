<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/jvectormap/jquery-jvectormap-2.0.3.css">
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="customscroll customscroll-10-p height-100-p xs-pd-20-10 pd-ltr-20">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Dashboard</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
							</ol>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								January 2018
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#">Export List</a>
								<a class="dropdown-item" href="#">Policies</a>
								<a class="dropdown-item" href="#">View Assets</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row clearfix progress-box">
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-30 box-shadow border-radius-5 height-100-p">
						<div class="progress-box text-center">
							 <input type="text" class="knob dial1" value="66" data-width="120" data-height="120" data-thickness="0.05" data-fgColor="#0099ff" readonly>
							<h5 class="text-blue padding-top-10 weight-500">My Earnings</h5>
							<span class="font-14">66% Average <i class="fa fa-line-chart"></i></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-30 box-shadow border-radius-5 height-100-p">
						<div class="progress-box text-center">
							 <input type="text" class="knob dial2" value="75" data-width="120" data-height="120" data-thickness="0.05" data-fgColor="#41ccba" readonly>
							<h5 class="text-light-green padding-top-10 weight-500">Business Captured</h5>
							<span class="font-14">75% Average <i class="fa fa-line-chart"></i></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-30 box-shadow border-radius-5 height-100-p">
						<div class="progress-box text-center">
							 <input type="text" class="knob dial3" value="90" data-width="120" data-height="120" data-thickness="0.05" data-fgColor="#f56767" readonly>
							<h5 class="text-light-orange padding-top-10 weight-500">Projects Speed</h5>
							<span class="font-14">90% Average <i class="fa fa-line-chart"></i></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-30 box-shadow border-radius-5 height-100-p">
						<div class="progress-box text-center">
							 <input type="text" class="knob dial4" value="35" data-width="120" data-height="120" data-thickness="0.05" data-fgColor="#a683eb" readonly>
							<h5 class="text-light-purple padding-top-10 weight-500">Panding Orders</h5>
							<span class="font-14">35% Average <i class="fa fa-line-chart"></i></span>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-white pd-30 box-shadow border-radius-5 mb-30 xs-pd-20-10">
				<div class="row clearfix">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<h4 class="mb-30">Browser Visit</h4>
						<div class="browser-visits">
							<ul>
								<li class="d-flex flex-wrap align-items-center">
									<div class="icon"><img src="vendors/images/chrome.png" alt=""></div>
									<div class="browser-name">Google Chrome</div>
									<div class="visit"><span class="badge badge-pill badge-primary">50%</span></div>
								</li>
								<li class="d-flex flex-wrap align-items-center">
									<div class="icon"><img src="vendors/images/firefox.png" alt=""></div>
									<div class="browser-name">Mozilla Firefox</div>
									<div class="visit"><span class="badge badge-pill badge-secondary">40%</span></div>
								</li>
								<li class="d-flex flex-wrap align-items-center">
									<div class="icon"><img src="vendors/images/safari.png" alt=""></div>
									<div class="browser-name">Safari</div>
									<div class="visit"><span class="badge badge-pill badge-success">40%</span></div>
								</li>
								<li class="d-flex flex-wrap align-items-center">
									<div class="icon"><img src="vendors/images/edge.png" alt=""></div>
									<div class="browser-name">Microsoft Edge</div>
									<div class="visit"><span class="badge badge-pill badge-warning">20%</span></div>
								</li>
								<li class="d-flex flex-wrap align-items-center">
									<div class="icon"><img src="vendors/images/opera.png" alt=""></div>
									<div class="browser-name">Opera Mini</div>
									<div class="visit"><span class="badge badge-pill badge-info">20%</span></div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-9 col-md-6 col-sm-12">
						<div id="browservisit" style="width:100%!important; height:415px"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 mb-30">
					<div class="bg-white pd-30 box-shadow border-radius-5 xs-pd-20-10 height-100-p">
						<h4 class="mb-30">Compliance Trend</h4>
						<div id="compliance-trend" class="compliance-trend"></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 mb-30">
					<div class="bg-white pd-30 box-shadow border-radius-5 xs-pd-20-10 height-100-p">
						<h4 class="mb-30">Records</h4>
						<div id="chart" class="chart"></div>
					</div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/jQuery-Knob-master/js/jquery.knob.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	<script src="src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
	<script src="src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script>
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
				categories: ['jan 01', 'jan 10', 'jan 20', 'jan 30', 'jan 30', 'jan 30', 'jan 30'],
				labels: {
					style: {
						color: '#1ca1ec',
						fontSize: '14px'
					}
				}
			},
			yAxis: {
				labels: {
					formatter: function () {
						return this.value;
					},
					style: {
						color: '#1ca1ec',
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
						lineColor: '#0ba4f0',
						lineWidth: 1
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
				color: '#0ba4f0',
				marker: {
					symbol: 'circle'
				},
				data: [0, 15, 5, 30, 40, 30, 28]
			},
			{
				name: 'Forum',
				color: '#87c7f3',
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
			colors: ['#209688', '#f9d47a', '#fb5b55'],
			title: {
				text: ''
			},
			credits: {
				enabled: false
			},
			xAxis: {
				categories: ['1th Sep', '2th Sep', '3th Sep', '4th Sep', '5th Sep', '6th Sep', '7th Sep', '8th Sep', '9th Sep', '10th Sep', '11th Sep', '12th Sep', '13th Sep', '14th Sep', '15th Sep'],
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
				data: [50, 30, 40, 70, 20, 50, 30, 40, 70, 20, 30, 30, 40, 40, 70,]
			}, {
				name: 'Warning',
				maxPointWidth: 10,
				data: [0, 20, 30, 20, 10, 50, 30, 40, 10, 20, 40, 30, 40, 30, 20,]
			}, {
				name: 'Error',
				maxPointWidth: 10,
				data: [50, 50, 30, 10, 70, 0, 40, 20, 20, 60, 30, 30, 20, 30, 10,]
			}]
		});

	</script>
</body>
</html>