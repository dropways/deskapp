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
		<div class="pd-ltr-20 xs-pd-20-10">
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
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A basic message</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-basic">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A title with a text under</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-title">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A success message!</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-success">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A error message!</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-error">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A warning message, with a function attached to the "Confirm"-button...</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-warning">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A custom positioned dialog</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-custom-position">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">By passing a parameter, you can execute something else for "Cancel".</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-params">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A message with custom Image Header</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-image">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A message with auto close timer</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-close">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">Custom HTML description and buttons</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="custom-html-alert">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A message with custom width, padding and background</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="custom-padding-width-alert">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">Ajax request example</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="ajax-alert">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">Chaining modals (queue) example</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="chaining-alert">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">Dynamic queue example</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="dynamic-alert">Click me</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>

	<!-- add sweet alert js & css in footer -->
	<script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>

</body>
</html>