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
								<h4>Carousel</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">UI Carousel</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<!-- Slides only -->
						<div class="bg-white border-radius-4 box-shadow mb-30">
							<div class="clearfix pd-20">
								<div class="pull-left">
									<h4>Slides only</h4>
								</div>
								<div class="pull-right">
									<a href="#carousel1" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
								</div>
							</div>
							<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="vendors/images/img2.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="vendors/images/img3.jpg" alt="Second slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="vendors/images/img4.jpg" alt="Third slide">
									</div>
								</div>
							</div>
							<div class="collapse collapse-box" id="carousel1">
								<div class="code-box">
									<div class="clearfix">
										<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#copy-carousel1"><i class="fa fa-clipboard"></i> Copy Code</a>
										<a href="#carousel1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
									</div>
									<pre><code class="xml copy-pre" id="copy-carousel1">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="vendors/images/img2.jpg" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img3.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img4.jpg" alt="Third slide">
		</div>
	</div>
</div>
									</code></pre>
								</div>
							</div>
						</div>
					</div>
					<!-- With controls -->
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="bg-white border-radius-4 box-shadow mb-30">
							<div class="clearfix pd-20">
								<div class="pull-left">
									<h4>With controls</h4>
								</div>
								<div class="pull-right">
									<a href="#carousel2" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
								</div>
							</div>
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="vendors/images/img2.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="vendors/images/img3.jpg" alt="Second slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="vendors/images/img4.jpg" alt="Third slide">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="collapse collapse-box" id="carousel2">
								<div class="code-box">
									<div class="clearfix">
										<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#copy-carousel2"><i class="fa fa-clipboard"></i> Copy Code</a>
										<a href="#carousel2" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
									</div>
									<pre><code class="xml copy-pre" id="copy-carousel2">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="vendors/images/img2.jpg" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img3.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img4.jpg" alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
									</code></pre>
								</div>
							</div>
						</div>
					</div>
					<!-- With indicators -->
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="bg-white border-radius-4 box-shadow mb-30">
							<div class="clearfix pd-20">
								<div class="pull-left">
									<h4>With indicators</h4>
								</div>
								<div class="pull-right">
									<a href="#carousel3" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
								</div>
							</div>
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="vendors/images/img3.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="vendors/images/img4.jpg" alt="Second slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="vendors/images/img5.jpg" alt="Third slide">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="collapse collapse-box" id="carousel3">
								<div class="code-box">
									<div class="clearfix">
										<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#copy-carousel3"><i class="fa fa-clipboard"></i> Copy Code</a>
										<a href="#carousel3" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
									</div>
									<pre><code class="xml copy-pre" id="copy-carousel3">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="vendors/images/img3.jpg" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img4.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img5.jpg" alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
									</code></pre>
								</div>
							</div>
						</div>
					</div>
					<!-- With captions -->
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="bg-white border-radius-4 box-shadow mb-30">
							<div class="clearfix pd-20">
								<div class="pull-left">
									<h4>With captions</h4>
								</div>
								<div class="pull-right">
									<a href="#carousel4" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
								</div>
							</div>
							<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
									<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="vendors/images/img1.jpg" alt="First slide" />
										<div class="carousel-caption d-none d-md-block">
											<h5 class="color-white">First slide label</h5>
											<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
										</div>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="vendors/images/img3.jpg" alt="Second slide" />
										<div class="carousel-caption d-none d-md-block">
											<h5 class="color-white">Second slide label</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										</div>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="vendors/images/img2.jpg" alt="Third slide" />
										<div class="carousel-caption d-none d-md-block">
											<h5 class="color-white">Third slide label</h5>
											<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="collapse collapse-box" id="carousel4">
								<div class="code-box">
									<div class="clearfix">
										<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#copy-carousel4"><i class="fa fa-clipboard"></i> Copy Code</a>
										<a href="#carousel4" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
									</div>
									<pre><code class="xml copy-pre" id="copy-carousel4">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="vendors/images/img1.jpg" alt="First slide" />
			<div class="carousel-caption d-none d-md-block">
				<h5 class="color-white">First slide label</h5>
				<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img3.jpg" alt="Second slide" />
			<div class="carousel-caption d-none d-md-block">
				<h5 class="color-white">Second slide label</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img2.jpg" alt="Third slide" />
			<div class="carousel-caption d-none d-md-block">
				<h5 class="color-white">Third slide label</h5>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
									</code></pre>
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