<!DOCTYPE html>
<html>

<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/build/jquery.steps.css">
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.php">
					<img src="vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap">
		<div class="wizard-content">
			<form class="tab-wizard wizard-circle wizard">
				<h5>Basic Account Credentials</h5>
				<section>
					<div class="form-wrap max-width-600 mx-auto pt-0 pt-md-5">
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Email Address*</label>
							<div class="col-sm-8">
								<input type="email" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Username*</label>
							<div class="col-sm-8">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Password*</label>
							<div class="col-sm-8">
								<input type="password" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Confirm Password*</label>
							<div class="col-sm-8">
								<input type="password" class="form-control">
							</div>
						</div>
					</div>
				</section>
				<!-- Step 2 -->
				<h5>Personal Information</h5>
				<section>
					<div class="form-wrap max-width-600 mx-auto pt-0 pt-md-5">
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Full Name*</label>
							<div class="col-sm-8">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-group row align-items-center">
							<label class="col-sm-4 col-form-label">Gender*</label>
							<div class="col-sm-8">
								<div class="custom-control custom-radio custom-control-inline pb-0">
									<input type="radio" id="male" name="gender" class="custom-control-input">
									<label class="custom-control-label" for="male">Male</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline pb-0">
									<input type="radio" id="female" name="gender" class="custom-control-input">
									<label class="custom-control-label" for="female">Female</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Location</label>
							<div class="col-sm-8">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Tell Us About Yourself</label>
							<div class="col-sm-8">
								<textarea class="form-control"></textarea>
							</div>
						</div>
					</div>
				</section>
				<!-- Step 3 -->
				<h5>Payment Method & Info</h5>
				<section>
					<div class="form-wrap max-width-600 mx-auto pt-0 pt-md-5">
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Credit Card Type</label>
							<div class="col-sm-8">
								<select class="form-control selectpicker" title="Select Card Type">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
								</select>
							</div>
						</div>
						<div class="form-group row align-items-center">
							<label class="col-sm-4 col-form-label">Credit Card Number</label>
							<div class="col-sm-8">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">CVC</label>
							<div class="col-sm-3">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Expiration Date</label>
							<div class="col-sm-8">
								<div class="row">
									<div class="col-6">
										<select class="form-control selectpicker" title="Month" data-size="5">
											<option value='01'>January</option>
											<option value='02'>February</option>
											<option value='03'>March</option>
											<option value='04'>April</option>
											<option value='05'>May</option>
											<option value='06'>June</option>
											<option value='07'>July</option>
											<option value='08'>August</option>
											<option value='09'>September</option>
											<option value='10'>October</option>
											<option value='11'>November</option>
											<option value='12'>December</option>
										</select>
									</div>
									<div class="col-6">
										<select class="form-control selectpicker" title="Year" data-size="5">
											<option>2020</option>
											<option>2019</option>
											<option>2018</option>
											<option>2017</option>
											<option>2016</option>
											<option>2015</option>
											<option>2014</option>
											<option>2013</option>
											<option>2012</option>
											<option>2011</option>
											<option>2010</option>
											<option>2009</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Card Holder Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
				</section>
				<!-- Step 4 -->
				<h5>Overview Information</h5>
				<section>
					<div class="form-wrap max-width-600 mx-auto pt-0 pt-md-5">
						<ul class="register-info">
							<li>
								<div class="row">
									<div class="col-sm-4">Email Address</div>
									<div class="col-sm-8">example@abc.com</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-sm-4">Username</div>
									<div class="col-sm-8">Example</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-sm-4">Password</div>
									<div class="col-sm-8">.....000</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-sm-4">Full Name</div>
									<div class="col-sm-8">john smith</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-sm-4">Location</div>
									<div class="col-sm-8">123 Example</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-sm-4">Credit Card Type</div>
									<div class="col-sm-8">Visa</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-sm-4">Credit Card Number</div>
									<div class="col-sm-8">.... .... .... .000</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-sm-4">Card Holder Name</div>
									<div class="col-sm-8">john smith</div>
								</div>
							</li>
						</ul>
						<div class="custom-control custom-checkbox mt-4">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">I have read and agreed to the terms of services and privacy policy</label>
						</div>
					</div>
				</section>
			</form>
		</div>
	</div>
	<!-- success Popup html Start -->
	<button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
	<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Form Submitted!</h3>
					<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</div>
				<div class="modal-footer justify-content-center">
					<a href="login.php" class="btn btn-primary">Done</a>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html End -->
	<?php include('include/script.php'); ?>
	<script src="src/plugins/jquery-steps/build/jquery.steps.js"></script>
	<script>
		$(".tab-wizard").steps({
			headerTag: "h5",
			bodyTag: "section",
			transitionEffect: "fade",
			titleTemplate: '<span class="step">#index#</span> <span class="info">#title#</span>',
			labels: {
				finish: "Submit",
				next: "Proceed",
				previous: "Go Back",
			},
			onStepChanged: function(event, currentIndex, priorIndex) {
				$('.steps .current').prevAll().addClass('disabled');
			},
			onFinished: function(event, currentIndex) {
				$('#success-modal-btn').trigger('click');
			}
		});
	</script>
</body>

</html>