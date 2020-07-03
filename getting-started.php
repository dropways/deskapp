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
								<h4>Getting Started</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item"><a href="javascript:;">Documentation</a></li>
									<li class="breadcrumb-item active" aria-current="page">Getting Started</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									Menu
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="introduction.php">Introduction</a>
									<a class="dropdown-item active" href="getting-started.php">Getting Started</a>
									<a class="dropdown-item" href="color-settings.php">Color Settings</a>
									<a class="dropdown-item" href="third-party-plugins.php">Third Party Plugins</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="pd-20 card-box mb-30">
					<h4 class="h4 text-blue mb-10">Getting Started</h4>
					<div class="alert alert-primary" role="alert">
						Note: we recomonded you to please make your one own css file & one js files and add that in your page, so whenever the update of Severny admin comes it does not affect your code.
					</div>
					<div class="alert alert-danger" role="alert">
						If you are using css then no need to follow below steps. Just go to the index.html and open that file in to the browser for desire output.
					</div>
					<div class="alert alert-danger" role="alert">
						If you are using scss and package managing then we have compilation tool (gulp) for that please follow the below steps.
					</div>
					<div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item pt-20 pb-20">
								<h6 class="weight-400 d-flex">
									<i class="icon-copy dw dw-checked mr-2" data-color="#1b00ff"></i> Install Node.js From <a href="https://nodejs.org/en/download/" class="ml-2" target="_blank" data-color="#1b00ff">https://nodejs.org/en/download/</a>
								</h6>
							</li>
							<li class="list-group-item pt-20 pb-20">
								<h6 class="weight-400 d-flex">
									<i class="icon-copy dw dw-checked mr-2" data-color="#1b00ff"></i> After that open command promt or any other terminal and go to Package Path.
								</h6>
							</li>
							<li class="list-group-item pt-20 pb-20">
								<h6 class="weight-400 d-flex">
									<i class="icon-copy dw dw-checked mr-2" data-color="#1b00ff"></i> Npm is a default package manager for the JavaScript runtime environment Node.js. If you've already then update once.
								</h6>
								<div class="bg-dark py-2 px-3 ml-md-4 mt-md-3 text-white rounded-lg shadow">
									<p class="mb-0">npm install --global npm@latest</p>
								</div>
								<div class="ml-md-4 mt-md-3 alert alert-success p-0">
									<div class="bg-success mb-0 text-white py-2 px-3">
										<p class="mb-0">To check weather is node succesfully install or not.</p>
									</div>
									<div class="p-3">
										<p class="mb-0 weight-500">npm --version</p>
									</div>
								</div>
							</li>
							<li class="list-group-item pt-20 pb-20">
								<h6 class="weight-400 d-flex">
									<i class="icon-copy dw dw-checked mr-2" data-color="#1b00ff"></i> Gulp is a cross-platform, streaming task runner that lets developers automate many development tasks. To install gulp globally has inclue:
								</h6>
								<div class="bg-dark py-2 px-3 ml-md-4 mt-md-3 text-white rounded-lg shadow">
									<p class="mb-0">npm install --global gulp-cli</p>
								</div>
								<div class="ml-md-4 mt-md-3 alert alert-success p-0">
									<div class="bg-success mb-0 text-white py-2 px-3">
										<p class="mb-0">If you have previously installed gulp then remove it.</p>
									</div>
									<div class="p-3">
										<p class="mb-0 weight-500">npm rm --global gulp</p>
									</div>
								</div>
								<div class="ml-md-4 mt-md-3 alert alert-success p-0">
									<div class="bg-success mb-0 text-white py-2 px-3">
										<p class="mb-0">To check weather is gulp succesfully install or not.</p>
									</div>
									<div class="p-3">
										<p class="mb-0 weight-500">gulp --version</p>
									</div>
								</div>
							</li>
							<li class="list-group-item pt-20 pb-20">
								<h6 class="weight-400 d-flex">
									<i class="icon-copy dw dw-checked mr-2" data-color="#1b00ff"></i> Below Command will execute all the assets(js,css) to the dist folder separately.
								</h6>
								<div class="bg-dark py-2 px-3 ml-md-4 mt-md-3 text-white rounded-lg shadow">
									<p class="mb-0">gulp</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>