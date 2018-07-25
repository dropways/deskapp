<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Charts</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Charts</li>
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

				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
							<div class="progress-box text-center">
								 <input type="text" class="knob dial5" value="35" data-width="220" data-height="220" data-thickness="0.08" data-fgColor="#a683eb" data-cursor="true">
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
							<div class="progress-box text-center">
								 <input type="text" class="knob dial5" value="35" data-width="220" data-height="220" data-thickness="0.08" data-fgColor="#f56767" data-angleOffset="90" data-linecap="round">
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
							<div class="progress-box text-center">
								 <input type="text" class="knob dial5" value="35" data-width="220" data-height="220" data-thickness="0.02" data-fgColor="#f56767" data-skin="tron" data-angleOffset="180">
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
							<div class="progress-box text-center">
								 <input type="text" class="knob dial5" value="35" data-width="220" data-height="220" data-thickness="0.08" data-fgColor="#0099ff" data-angleOffset="-125" data-angleArc="250" data-rotation="anticlockwise">
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/jQuery-Knob-master/js/jquery.knob.js"></script>
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
		$(".dial5").knob();
	</script>
</body>
</html>