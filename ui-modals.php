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
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Modals</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">UI Modals</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<!-- Large modal -->
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h5 class="h4">Large modal</h5>
							<a href="#" class="btn-block" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
								<img src="vendors/images/modal-img1.jpg" alt="modal">
							</a>
							<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Medium modal -->
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h5 class="h4">Medium modal</h5>
							<a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button">
								<img src="vendors/images/modal-img2.jpg" alt="modal">
							</a>
							<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Small modal -->
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h5 class="h4">Small modal</h5>
							<a href="#" class="btn-block" data-toggle="modal" data-target="#small-modal" type="button">
								<img src="vendors/images/modal-img3.jpg" alt="modal">
							</a>
							<div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Login modal -->
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h5 class="h4">Login modal</h5>
							<a href="#" class="btn-block" data-backdrop="static" data-toggle="modal" data-target="#login-modal" type="button">
								<img src="vendors/images/modal-img2.jpg" alt="modal">
							</a>
							<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="login-box bg-white box-shadow border-radius-10">
											<div class="login-title">
												<h2 class="text-center text-primary">Login To DeskApp</h2>
											</div>
											<form>
												<div class="select-role">
													<div class="btn-group btn-group-toggle" data-toggle="buttons">
														<label class="btn active">
															<input type="radio" name="options" id="admin">
															<div class="icon"><img src="vendors/images/briefcase.svg" class="svg" alt=""></div>
															<span>I'm</span>
															Manager
														</label>
														<label class="btn">
															<input type="radio" name="options" id="user">
															<div class="icon"><img src="vendors/images/person.svg" class="svg" alt=""></div>
															<span>I'm</span>
															Employee
														</label>
													</div>
												</div>
												<div class="input-group custom">
													<input type="text" class="form-control form-control-lg" placeholder="Username">
													<div class="input-group-append custom">
														<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
													</div>
												</div>
												<div class="input-group custom">
													<input type="password" class="form-control form-control-lg" placeholder="**********">
													<div class="input-group-append custom">
														<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
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
																<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
															-->
															<a class="btn btn-primary btn-lg btn-block" href="index.php">Sign In</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Alert modal -->
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h5 class="h4">Alert modal</h5>
							<a href="#" class="btn-block" data-toggle="modal" data-target="#alert-modal" type="button">
								<img src="vendors/images/modal-img3.jpg" alt="modal">
							</a>
							<div class="modal fade" id="alert-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm modal-dialog-centered">
									<div class="modal-content bg-danger text-white">
										<div class="modal-body text-center">
											<h3 class="text-white mb-15"><i class="fa fa-exclamation-triangle"></i> Alert</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua.</p>
											<button type="button" class="btn btn-light" data-dismiss="modal">Ok</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Warning modal -->
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h5 class="h4">Warning modal</h5>
							<a href="#" class="btn-block" data-toggle="modal" data-target="#warning-modal" type="button">
								<img src="vendors/images/modal-img3.jpg" alt="modal">
							</a>
							<div class="modal fade" id="warning-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm modal-dialog-centered">
									<div class="modal-content bg-warning">
										<div class="modal-body text-center">
											<h3 class="mb-15"><i class="fa fa-exclamation-triangle"></i> Warning</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua.</p>
											<button type="button" class="btn btn-dark" data-dismiss="modal">Ok</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Success modal -->
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h5 class="h4">Success modal</h5>
							<a href="#" class="btn-block" data-toggle="modal" data-target="#success-modal" type="button">
								<img src="vendors/images/modal-img3.jpg" alt="modal">
							</a>
							<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-body text-center font-18">
											<h3 class="mb-20">Form Submitted!</h3>
											<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										</div>
										<div class="modal-footer justify-content-center">
											<button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Confirmation modal -->
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h5 class="h4">Confirmation modal</h5>
							<a href="#" class="btn-block" data-toggle="modal" data-target="#confirmation-modal" type="button">
								<img src="vendors/images/modal-img3.jpg" alt="modal">
							</a>
							<div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-body text-center font-18">
											<h4 class="padding-top-30 mb-30 weight-500">Are you sure you want to continue?</h4>
											<div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
												<div class="col-6">
													<button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
													NO
												</div>
												<div class="col-6">
													<button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-check"></i></button>
													YES
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>