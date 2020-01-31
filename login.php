<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
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
					<li><a href="#">Register</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-7">
					<img src="vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center font-weight-700 text-primary">Login Here</h2>
						</div>
						<form>
							<div class="input-group custom">
								<input type="text" class="form-control" placeholder="Username">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password"><a href="forgot-password.php">Forgot Password</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
										<a class="btn btn-outline-primary btn-lg btn-block" href="index.php">Sign In</a>
									</div>
									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
										<a class="btn btn-primary btn-lg btn-block" href="index.php">Register To Create Account</a>
									</div>
								</div>
							</div>
						</form>
					</div>				
				</div>
			</div>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>