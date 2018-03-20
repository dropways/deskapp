<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/sweetalert2/sweetalert2.css">
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
								<h4>Sweet Alert</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">UI Sweet Alert</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow text-center height-100-p">
							<h5 class="pt-20 mb-30">A basic message</h5>
							<button type="button" class="btn mb-20 btn-outline-primary" id="sa-basic">Click me</button>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow text-center height-100-p">
							<h5 class="pt-20 mb-30">A title with a text under</h5>
							<button type="button" class="btn mb-20 btn-outline-primary" id="sa-title">Click me</button>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow text-center height-100-p">
							<h5 class="pt-20 mb-30">A success message!</h5>
							<button type="button" class="btn mb-20 btn-outline-primary" id="sa-success">Click me</button>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow text-center height-100-p">
							<h5 class="pt-20 mb-30">A warning message, with a function attached to the "Confirm"-button...</h5>
							<button type="button" class="btn mb-20 btn-outline-primary" id="sa-warning">Click me</button>
						</div>
					</div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>
</body>
</html>