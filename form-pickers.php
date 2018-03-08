<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-asColorPicker/dist/css/asColorPicker.css">
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form Pickers</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Pickers</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
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

				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Date Picker</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<form>
								<div class="form-group">
									<label>Default Datedpicker</label>
									<input class="form-control date-picker" placeholder="Select Date" type="text">
								</div>
								<div class="form-group">
									<label>Date and time</label>
									<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
								</div>
							</form>
						</div>
						<div class="col-md-4 col-sm-12 text-center">
							<div class="mb-20">
								<label>Datedpicker Inline</label>
								<div class="datepicker-here" data-timepicker="true" data-language='en'></div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12">
							<form>
								<div class="form-group">
									<label>Datedpicker Month View</label>
									<input class="form-control month-picker" placeholder="Select Month" type="text">
								</div>
								<div class="form-group">
									<label>Datedpicker Range View</label>
									<input class="form-control datetimepicker-range" placeholder="Select Month" type="text">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Clock Picker</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="form-group">
								<label>time Delive</label>
								<input class="form-control time-picker-default" placeholder="time" type="text">
							</div>
						</div>
						<div class="col-md-3 col-sm-12">
							<div class="form-group">
								<label>Train departure</label>
								<input class="form-control time-picker-default" placeholder="time" type="text">
							</div>
						</div>
						<div class="col-md-3 col-sm-12">
							<div class="form-group">
								<label>Alarm Clock</label>
								<input class="form-control time-picker" placeholder="time" type="text">
							</div>
						</div>
						<div class="col-md-3 col-sm-12">
							<div class="form-group">
								<label>Text field</label>
								<input class="form-control time-picker-default" placeholder="time" type="text">
							</div>
						</div>
					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow height-100-p mb-30">
					<div class="clearfix mb-30">
						<div class="pull-left">
							<h4 class="text-blue">Color Picker</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="form-group">
								<label>
									Simple mode
									<div class="font-14">use <code>.colorpicker</code> in your input element. </div>
								</label>
								<input type="text" class="colorpicker form-control" value="#7ab2fa" />
							</div>
						</div>
						<div class="col-md-4 col-sm-12">
							<div class="form-group">
								<label>
									Simple mode
									<div class="font-14">use <code>.complex-colorpicker</code> in your input element. </div>
								</label>
								<input type="text" class="complex-colorpicker form-control" value="#7ab2fa" />
							</div>
						</div>
						<div class="col-md-4 col-sm-12">
							<div class="form-group">
								<label>
									Simple mode
									<div class="font-14">use <code>.gradient-colorpicker</code> in your input element. </div>
								</label>
								<input type="text" class="gradient-colorpicker form-control" value="#f56767" />
							</div>
						</div>
					</div>
				</div>

			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/jquery-asColor/dist/jquery-asColor.js"></script>
	<script src="src/plugins/jquery-asGradient/dist/jquery-asGradient.js"></script>
	<script src="src/plugins/jquery-asColorPicker/dist/jquery-asColorPicker.js"></script>
	<script>
		$(".colorpicker").asColorPicker();
		$(".complex-colorpicker").asColorPicker({
			mode: 'complex'
		});
		$(".gradient-colorpicker").asColorPicker({
			mode: 'gradient'
		});
	</script>
</body>
</html>