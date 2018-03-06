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
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Advanced Components</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Advanced Components</li>
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
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Select 2</h4>
							<p class="mb-30 font-14">Select2 for custom search and select</p>
						</div>
					</div>
					<form>
						<div class="form-group">
							<label>Single Select</label>
							<select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
								<optgroup label="Alaskan/Hawaiian Time Zone">
									<option value="AK">Alaska</option>
									<option value="HI">Hawaii</option>
								</optgroup>
								<optgroup label="Pacific Time Zone">
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="OR">Oregon</option>
									<option value="WA">Washington</option>
								</optgroup>
								<optgroup label="Mountain Time Zone">
									<option value="AZ">Arizona</option>
									<option value="CO">Colorado</option>
									<option value="ID">Idaho</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NM">New Mexico</option>
									<option value="ND">North Dakota</option>
									<option value="UT">Utah</option>
									<option value="WY">Wyoming</option>
								</optgroup>
							</select>
						</div>
						<div class="form-group">
							<label>Multiple Select</label>
							<select class="custom-select2 form-control" multiple="multiple" style="width: 100%;">
								<optgroup label="Alaskan/Hawaiian Time Zone">
									<option value="AK">Alaska</option>
									<option value="HI">Hawaii</option>
								</optgroup>
								<optgroup label="Pacific Time Zone">
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="OR">Oregon</option>
									<option value="WA">Washington</option>
								</optgroup>
								<optgroup label="Mountain Time Zone">
									<option value="AZ">Arizona</option>
									<option value="CO">Colorado</option>
									<option value="ID">Idaho</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NM">New Mexico</option>
									<option value="ND">North Dakota</option>
									<option value="UT">Utah</option>
									<option value="WY">Wyoming</option>
								</optgroup>
							</select>
						</div>
					</form>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Bootstrap Select</h4>
							<p class="mb-30 font-14">Just add class <code>.selectpicker & .dropdown</code> to select</p>
						</div>
					</div>
					<form>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Single Select</label>
									<select class="selectpicker form-control" data-style="btn-primary">
										<optgroup label="Condiments" data-max-options="2">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</optgroup>
										<optgroup label="Breads" data-max-options="2">
											<option>Plain</option>
											<option>Steamed</option>
											<option>Toasted</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Single Select</label>
									<select class="selectpicker form-control" data-style="btn-secondary" multiple data-max-options="3">
										<optgroup label="Condiments">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</optgroup>
										<optgroup label="Breads">
											<option>Plain</option>
											<option>Steamed</option>
											<option>Toasted</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Single Select</label>
									<select class="selectpicker form-control" data-style="btn-success">
										<optgroup label="Condiments" data-max-options="2">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</optgroup>
										<optgroup label="Breads" data-max-options="2">
											<option>Plain</option>
											<option>Steamed</option>
											<option>Toasted</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Single Select</label>
									<select class="selectpicker form-control" data-style="btn-danger">
										<optgroup label="Condiments" data-max-options="2">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</optgroup>
										<optgroup label="Breads" data-max-options="2">
											<option>Plain</option>
											<option>Steamed</option>
											<option>Toasted</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Single Select</label>
									<select class="selectpicker form-control" data-style="btn-warning">
										<optgroup label="Condiments" data-max-options="2">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</optgroup>
										<optgroup label="Breads" data-max-options="2">
											<option>Plain</option>
											<option>Steamed</option>
											<option>Toasted</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Single Select</label>
									<select class="selectpicker form-control" data-style="btn-info">
										<optgroup label="Condiments" data-max-options="2">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</optgroup>
										<optgroup label="Breads" data-max-options="2">
											<option>Plain</option>
											<option>Steamed</option>
											<option>Toasted</option>
										</optgroup>
									</select>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>