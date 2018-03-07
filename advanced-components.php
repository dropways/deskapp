<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<!-- switchery css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/switchery/dist/switchery.css">
	<!-- bootstrap-tagsinput css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
	<!-- bootstrap-touchspin css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css">
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

				<!-- Select-2 Start -->
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
				<!-- Select-2 end -->
				<!-- Bootstrap Select Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Bootstrap Select</h4>
							<p class="mb-30 font-14">Just add class <code>.selectpicker</code> to select</p>
						</div>
					</div>
					<form>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Single Select</label>
									<select class="selectpicker form-control" data-style="btn-outline-primary">
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
									<label>multiple Select</label>
									<select class="selectpicker form-control" data-style="btn-outline-secondary" multiple data-max-options="3">
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
									<label>Selected text format</label>
									<select class="selectpicker form-control" data-style="btn-outline-success" data-selected-text-format="count" multiple>
										<option>Mustard</option>
										<option>Ketchup</option>
										<option>Relish</option>
										<option>Plain</option>
										<option>Steamed</option>
										<option>Toasted</option>
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Subtext</label>
									<select class="selectpicker form-control" data-style="btn-outline-danger">
										<option data-subtext="French's">Mustard</option>
										<option data-subtext="Heinz">Ketchup</option>
										<option data-subtext="Sweet">Relish</option>
										<option data-subtext="Miracle Whip">Mayonnaise</option>
										<option data-divider="true"></option>
										<option data-subtext="Honey">Barbecue Sauce</option>
										<option data-subtext="Ranch">Salad Dressing</option>
										<option data-subtext="Sweet & Spicy">Tabasco</option>
										<option data-subtext="Chunky">Salsa</option>
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Select/deselect all</label>
									<select class="selectpicker form-control" data-style="btn-outline-warning" multiple data-actions-box="true" data-selected-text-format="count">
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
									<label>Disabled options</label>
									<select class="selectpicker form-control" data-style="btn-outline-info">
										<option>Mustard</option>
										<option disabled>Ketchup</option>
										<option>Relish</option>
										<option>Plain</option>
										<option disabled>Steamed</option>
										<option>Toasted</option>
									</select>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- Bootstrap Select End -->
				<div class="row">
					<!-- Bootstrap Switchery Start -->
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow height-100-p">
							<div class="clearfix mb-30">
								<div class="pull-left">
									<h4 class="text-blue">Switchery js</h4>
								</div>
							</div>
							<form>
								<div class="mb-30">
									<h5>Basic</h5>
									<p class="font-14">add <code> class="switch-btn" data-color="#0099ff"</code> to your input element.</p>
									<input type="checkbox" checked class="switch-btn" data-color="#0099ff">
									<input type="checkbox" checked class="switch-btn" data-color="#41ccba">
									<input type="checkbox" checked class="switch-btn" data-color="#f56767">
									<input type="checkbox" checked class="switch-btn" data-color="#a683eb">
									<input type="checkbox" checked class="switch-btn" data-color="#f2a654">
									<input type="checkbox" checked class="switch-btn" data-color="#0059b2">
								</div>
								<div class="mb-30">
									<h5>Sizes</h5>
									<p class="font-14">add <code>data-size="small",data-size="large"</code> to your input element for diffrent sizes.</p>
									<input type="checkbox" checked class="switch-btn" data-size="small" data-color="#0099ff">
									<input type="checkbox" checked class="switch-btn" data-size="small" data-color="#f56767">
									<input type="checkbox" checked class="switch-btn" data-color="#41ccba">
									<input type="checkbox" checked class="switch-btn" data-color="#a683eb">
									<input type="checkbox" checked class="switch-btn" data-size="large" data-color="#f2a654">
									<input type="checkbox" checked class="switch-btn" data-size="large" data-color="#0059b2">
								</div>
								<div class="mb-30">
									<h5>Secondary Color</h5>
									<p class="font-14">add <code>data-color="#0099ff" data-secondary-color="#28a745"</code> to your input</p>
									<input type="checkbox" checked class="switch-btn" data-size="small" data-color="#0099ff" data-secondary-color="#28a745">
									<input type="checkbox" class="switch-btn" data-size="small" data-color="#f56767" data-secondary-color="#28a745">
									<input type="checkbox" checked class="switch-btn" data-color="#41ccba" data-secondary-color="#28a745">
									<input type="checkbox" class="switch-btn" data-color="#a683eb" data-secondary-color="#28a745">
									<input type="checkbox" checked class="switch-btn" data-size="large" data-color="#f2a654" data-secondary-color="#28a745">
									<input type="checkbox" class="switch-btn" data-size="large" data-color="#0059b2" data-secondary-color="#28a745">
								</div>
							</form>
						</div>
					</div>
					<!-- Bootstrap Switchery End -->
					<!-- Bootstrap Tags Input Start -->
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow height-100-p">
							<div class="clearfix mb-30">
								<div class="pull-left">
									<h4 class="text-blue">Bootstrap Tags Input</h4>
								</div>
							</div>
							<form>
								<div class="mb-30">
									<h5>Input Value</h5>
									<p class="font-14">add <code>data-role="tagsinput"</code> to your input element.</p>
									<input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput">
								</div>
								<div class="mb-30">
									<h5>Select Value</h5>
									<p class="font-14">add <code>data-role="tagsinput"</code> to your select element & use select multiple</p>
									<select multiple data-role="tagsinput">
										<option value="Amsterdam">Amsterdam</option>
										<option value="Washington">Washington</option>
										<option value="Sydney">Sydney</option>
										<option value="Beijing">Beijing</option>
										<option value="Cairo">Cairo</option>
									</select>
								</div>
								<div class="mb-30">
									<h5>Input placeholder</h5>
									<p class="font-14">add <code>data-role="tagsinput" placeholder="add tags"</code> to your input element.</p>
									<input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags">
								</div>
							</form>
						</div>
					</div>
					<!-- Bootstrap Tags Input End -->
				</div>
				<!-- Bootstrap TouchSpin Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow height-100-p mb-30">
					<div class="clearfix mb-30">
						<div class="pull-left">
							<h4 class="text-blue">Bootstrap TouchSpin</h4>
						</div>
					</div>
					<form>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Example with postfix</label>
									<input id="demo1" type="text" value="55" name="demo1">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Example with prefix</label>
									<input id="demo2" type="text" value="0" name="demo2">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Vertical buttons with custom icons</label>
									<input id="demo_vertical2" type="text" value="" name="demo_vertical2">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Init with empty value</label>
									<input id="demo3" type="text" value="" name="demo3">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Value is set</label>
									<input id="demo3_22" type="text" value="33" name="demo3_22">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Button group</label>
									<input id="demo5" type="text" class="form-control" name="demo5" value="50">
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- Bootstrap TouchSpin End -->

			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<!-- switchery js -->
	<script src="src/plugins/switchery/dist/switchery.js"></script>
	<!-- bootstrap-tagsinput js -->
	<script src="src/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>
	<!-- bootstrap-touchspin js -->
	<script src="src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script>
	<script>
		// Switchery
		var elems = Array.prototype.slice.call(document.querySelectorAll('.switch-btn'));
		$('.switch-btn').each(function() {
			new Switchery($(this)[0], $(this).data());
		});

		// Bootstrap Touchspin
		$("input[name='demo_vertical2']").TouchSpin({
			verticalbuttons: true,
			verticalupclass: 'fa fa-plus',
			verticaldownclass: 'fa fa-minus'
		});
		$("input[name='demo3']").TouchSpin();
		$("input[name='demo1']").TouchSpin({
			min: 0,
			max: 100,
			step: 0.1,
			decimals: 2,
			boostat: 5,
			maxboostedstep: 10,
			postfix: '%'
		});
		$("input[name='demo2']").TouchSpin({
			min: -1000000000,
			max: 1000000000,
			stepinterval: 50,
			maxboostedstep: 10000000,
			prefix: '$'
		});
		$("input[name='demo3_22']").TouchSpin({
			initval: 40
		});
		$("input[name='demo5']").TouchSpin({
			prefix: "pre",
			postfix: "post"
		});
	</script>
</body>
</html>