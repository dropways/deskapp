<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/ion-rangeslider/css/ion.rangeSlider.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.css">
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Range slider</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">UI Range slider</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="container pd-0">
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						<h4>Range slider HTML5</h4>
						<p>You Can check more Detail <a href="https://github.com/IonDen/ion.rangeSlider" target="_blank" class="text-blue">Click Here</a></p>
						<input id="range_01" />
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						<h4>range and step</h4>
						<p>You Can check more Detail <a href="https://github.com/IonDen/ion.rangeSlider" target="_blank" class="text-blue">Click Here</a></p>
						<input id="range_02" />
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						<h4>custom values</h4>
						<p>You Can check more Detail <a href="https://github.com/IonDen/ion.rangeSlider" target="_blank" class="text-blue">Click Here</a></p>
						<input id="range_03" />
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						<h4>Prettify visual look of numbers</h4>
						<p>You Can check more Detail <a href="https://github.com/IonDen/ion.rangeSlider" target="_blank" class="text-blue">Click Here</a></p>
						<input id="range_04" />
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						<h4>Visual details</h4>
						<p>You Can check more Detail <a href="https://github.com/IonDen/ion.rangeSlider" target="_blank" class="text-blue">Click Here</a></p>
						<input id="range_05" />
					</div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/ion-rangeslider/js/ion.rangeSlider.js"></script>
	<script>
		$("#range_01").ionRangeSlider();
		$("#range_02").ionRangeSlider({
			type: "double",
			grid: true,
			min: -1000,
			max: 1000,
			from: -500,
			to: 500,
			prefix: "$"
		});
		$("#range_03").ionRangeSlider({
			type: "double",
			grid: true,
			from: 1,
			to: 5,
			values: [0, 10, 100, 1000, 10000, 100000, 1000000]
		});
		$("#range_04").ionRangeSlider({
			grid: true,
			min: 1000,
			max: 1000000,
			from: 400000,
			step: 1000,
			prettify_enabled: true,
			prettify: function (num) {
				return (Math.random() * num).toFixed(0);
			}
		});
		$("#range_05").ionRangeSlider({
			type: "double",
			min: 1000,
			max: 2000,
			from: 1200,
			to: 1800,
			hide_min_max: true,
			hide_from_to: false,
			grid: false
		});
	</script>
</body>
</html>