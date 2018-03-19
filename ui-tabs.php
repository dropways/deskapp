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
								<h4>Tabs</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">UI Tabs</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h5 class="weight-500 mb-20">Default Tab</h5>
							<div class="tab">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab" aria-selected="true">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#contact" role="tab" aria-selected="false">Contact</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="profile" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="contact" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h5 class="weight-500 mb-20">Customtab Tab</h5>
							<div class="tab">
								<ul class="nav nav-tabs customtab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#home2" role="tab" aria-selected="true">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#profile2" role="tab" aria-selected="false">Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#contact2" role="tab" aria-selected="false">Contact</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home2" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="profile2" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="contact2" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h5 class="weight-500 mb-20">vertical Tab</h5>
							<div class="tab">
								<div class="row clearfix">
									<div class="col-md-3 col-sm-12">
										<ul class="nav flex-column vtabs nav-tabs" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#home3" role="tab" aria-selected="true">Home</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#profile3" role="tab" aria-selected="false">Profile</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#contact3" role="tab" aria-selected="false">Contact</a>
											</li>
										</ul>
									</div>
									<div class="col-md-9 col-sm-12">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="home3" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="profile3" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="contact3" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h5 class="weight-500 mb-20">Custom vertical Tab</h5>
							<div class="tab">
								<div class="row clearfix">
									<div class="col-md-3 col-sm-12">
										<ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#home4" role="tab" aria-selected="true">Home</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#profile4" role="tab" aria-selected="false">Profile</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#contact4" role="tab" aria-selected="false">Contact</a>
											</li>
										</ul>
									</div>
									<div class="col-md-9 col-sm-12">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="home4" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="profile4" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="contact4" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h5 class="weight-500 mb-20">Nav Pills Tabs</h5>
							<div class="tab">
								<ul class="nav nav-pills" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-blue" data-toggle="tab" href="#home5" role="tab" aria-selected="true">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#profile5" role="tab" aria-selected="false">Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#contact5" role="tab" aria-selected="false">Contact</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home5" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="profile5" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="contact5" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h5 class="weight-500 mb-20">Nav Pills Tabs Right</h5>
							<div class="tab">
								<ul class="nav nav-pills justify-content-end" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-blue" data-toggle="tab" href="#home6" role="tab" aria-selected="true">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#profile6" role="tab" aria-selected="false">Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#contact6" role="tab" aria-selected="false">Contact</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home6" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="profile6" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="contact6" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h5 class="weight-500 mb-20">Icons vertical Tab</h5>
							<div class="tab">
								<div class="row clearfix">
									<div class="col-md-3 col-sm-12">
										<ul class="nav flex-column nav-pills vtabs" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#home7" role="tab" aria-selected="true"><i class="fa fa-home"></i></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#profile7" role="tab" aria-selected="false"><i class="fa fa-users"></i></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#contact7" role="tab" aria-selected="false"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
									<div class="col-md-9 col-sm-12">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="home7" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="profile7" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="contact7" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h5 class="weight-500 mb-20">Icons vertical Tab</h5>
							<div class="tab">
								<div class="row clearfix">
									<div class="col-md-3 col-sm-12">
										<ul class="nav flex-column nav-tabs vtabs" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#home8" role="tab" aria-selected="true"><i class="fa fa-home"></i></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#profile8" role="tab" aria-selected="false"><i class="fa fa-users"></i></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#contact8" role="tab" aria-selected="false"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
									<div class="col-md-9 col-sm-12">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="home8" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="profile8" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="contact8" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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