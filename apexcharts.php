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
								<h4>Apexcharts</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Charts</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2020
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">line Chart</h4>
					<div id="chart1"></div>
				</div>
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Area Chart</h4>
					<div id="chart2"></div>
				</div>
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Column Chart</h4>
					<div id="chart3"></div>
				</div>
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Bar Chart</h4>
					<div id="chart4"></div>
				</div>
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Mixed Chart</h4>
					<div id="chart5"></div>
				</div>
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Timeline Chart</h4>
					<div id="chart6"></div>
				</div>
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Candlestick Chart</h4>
					<div id="chart7"></div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="h4 text-blue">Pie Chart</h4>
							<div id="chart8"></div>
						</div>
					</div>
					<div class="col-md-6 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="h4 text-blue">Radial Bar Chart</h4>
							<div id="chart9"></div>
						</div>
					</div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="vendors/scripts/apexcharts-setting.js"></script>
</body>
</html>