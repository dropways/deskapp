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
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Notification</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">UI Notification</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow height-100-p">
							<h4>Examples</h4>
							<p class="pb-20">Alerts are available for any length of text, as well as an optional dismiss button. For proper styling, use one of the eight <strong>required</strong> contextual classes <code>(e.g., .alert-success)</code>. For inline dismissal, use the alerts jQuery plugin.</p>

							<div class="alert alert-primary" role="alert">
								This is a primary alert—check it out!
							</div>
							<div class="alert alert-secondary" role="alert">
								This is a secondary alert—check it out!
							</div>
							<div class="alert alert-success" role="alert">
								This is a success alert—check it out!
							</div>
							<div class="alert alert-danger" role="alert">
								This is a danger alert—check it out!
							</div>
							<div class="alert alert-warning" role="alert">
								This is a warning alert—check it out!
							</div>
							<div class="alert alert-info" role="alert">
								This is a info alert—check it out!
							</div>
							<div class="alert alert-light" role="alert">
								This is a light alert—check it out!
							</div>
							<div class="alert alert-dark" role="alert">
								This is a dark alert—check it out!
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow height-100-p">
							<h4>Link color</h4>
							<p class="pb-20">Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>

							<div class="alert alert-primary" role="alert">
								This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
							</div>
							<div class="alert alert-secondary" role="alert">
								This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
							</div>
							<div class="alert alert-success" role="alert">
								This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
							</div>
							<div class="alert alert-danger" role="alert">
								This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
							</div>
							<div class="alert alert-warning" role="alert">
								This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
							</div>
							<div class="alert alert-info" role="alert">
								This is a info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
							</div>
							<div class="alert alert-light" role="alert">
								This is a light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
							</div>
							<div class="alert alert-dark" role="alert">
								This is a dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow height-100-p">
							<h4>Dismissing</h4>
							<p class="pb-20">You can see this in action with a live demo:</p>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="alert alert-secondary alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="alert alert-info alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="alert alert-dark alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow height-100-p">
							<div class="alert alert-success" role="alert">
								<h4 class="alert-heading">Well done!</h4>
								<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
								<hr>
								<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
							</div>
							<div class="alert alert-primary" role="alert">
								<h4 class="alert-heading">Well done!</h4>
								<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
								<hr>
								<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
							</div>
							<div class="alert alert-secondary" role="alert">
								<h4 class="alert-heading">Well done!</h4>
								<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
								<hr>
								<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
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
	<link rel="stylesheet" type="text/css" href="src/plugins/sweetalert2/sweetalert2.css">
	<script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>

</body>
</html>