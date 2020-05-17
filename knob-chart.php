<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
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
									January 2020
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
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								 <input type="text" class="knob dial1" value="80" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#1b00ff" data-angleOffset="180" readonly>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
								<span class="d-block">80% Average <i class="fa fa-line-chart text-blue"></i></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								 <input type="text" class="knob dial2" value="70" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#00e091" data-angleOffset="180" readonly>
								<h5 class="text-light-green padding-top-10 h5">Business Captured</h5>
								<span class="d-block">75% Average <i class="fa text-light-green fa-line-chart"></i></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								 <input type="text" class="knob dial3" value="90" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#f56767" data-angleOffset="180" readonly>
								<h5 class="text-light-orange padding-top-10 h5">Projects Speed</h5>
								<span class="d-block">90% Average <i class="fa text-light-orange fa-line-chart"></i></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								 <input type="text" class="knob dial4" value="65" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#a683eb" data-angleOffset="180" readonly>
								<h5 class="text-light-purple padding-top-10 h5">Panding Orders</h5>
								<span class="d-block">65% Average <i class="fa text-light-purple fa-line-chart"></i></span>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="progress-box text-center">
								 <input type="text" class="knob dial5" value="35" data-width="220" data-height="220" data-thickness="0.08" data-fgColor="#a683eb" data-cursor="true">
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="progress-box text-center">
								 <input type="text" class="knob dial5" value="35" data-width="220" data-height="220" data-thickness="0.08" data-fgColor="#f56767" data-angleOffset="90" data-linecap="round">
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="progress-box text-center">
								 <input type="text" class="knob dial5" value="35" data-width="220" data-height="220" data-thickness="0.02" data-fgColor="#f56767" data-skin="tron" data-angleOffset="180">
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
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
	<script src="src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
	<script src="vendors/scripts/knob-chart-setting.js"></script>
</body>
</html>