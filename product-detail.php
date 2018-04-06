<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<!-- Slick Slider css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/slick/slick.css">
	<!-- bootstrap-touchspin css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css">
</head>
<body>
	<div class="container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Product Detail</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Product Detail</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="product-wrap">
					<div class="product-detail-wrap mb-30">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="product-slider slider-arrow">
									<div class="product-slide">
										<img src="vendors/images/product-img1.jpg" alt="">
									</div>
									<div class="product-slide">
										<img src="vendors/images/product-img2.jpg" alt="">
									</div>
									<div class="product-slide">
										<img src="vendors/images/product-img3.jpg" alt="">
									</div>
									<div class="product-slide">
										<img src="vendors/images/product-img4.jpg" alt="">
									</div>
								</div>
								<div class="product-slider-nav">
									<div class="product-slide-nav">
										<img src="vendors/images/product-img1.jpg" alt="">
									</div>
									<div class="product-slide-nav">
										<img src="vendors/images/product-img2.jpg" alt="">
									</div>
									<div class="product-slide-nav">
										<img src="vendors/images/product-img3.jpg" alt="">
									</div>
									<div class="product-slide-nav">
										<img src="vendors/images/product-img4.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="product-detail-desc pd-20 bg-white border-radius-4 box-shadow height-100-p">
									<h4 class="mb-20 pt-20">Gufram Bounce Black</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<div class="price">
										<del>$55.5</del><ins>$49.5</ins>
									</div>
									<div class="mx-w-150">
										<div class="form-group">
											<label class="text-blue">quantity</label>
											<input id="demo3_22" type="text" value="1" name="demo3_22">
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-6">
											<a href="#" class="btn btn-primary btn-block">Add To Cart</a>
										</div>
										<div class="col-md-6 col-6">
											<a href="#" class="btn btn-outline-primary btn-block">Buy Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h4 class="mb-20">Recent Product</h4>
					<div class="product-list">
						<ul class="row">
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="vendors/images/product-img1.jpg" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Gufram Bounce Black</a></h4>
										<div class="price">
											<del>$55.5</del><ins>$49.5</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Read More</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="vendors/images/product-img2.jpg" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Gufram Bounce White</a></h4>
										<div class="price">
											<del>$75.5</del><ins>$50</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="vendors/images/product-img3.jpg" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Contrast Lace-Up Sneakers</a></h4>
										<div class="price">
											<ins>$80</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Add To Cart</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<!-- Slick Slider js -->
	<script src="src/plugins/slick/slick.min.js"></script>
	<!-- bootstrap-touchspin js -->
	<script src="src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script>
	<script>
		jQuery(document).ready(function() {
			jQuery('.product-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				infinite: true,
				speed: 1000,
				fade: true,
				asNavFor: '.product-slider-nav'
			});
			jQuery('.product-slider-nav').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				asNavFor: '.product-slider',
				dots: false,
				infinite: true,
				arrows: false,
				speed: 1000,
				centerMode: true,
				focusOnSelect: true
			});
			$("input[name='demo3_22']").TouchSpin({
				initval: 1
			});
		});
	</script>
</body>
</html>