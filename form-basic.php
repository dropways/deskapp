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
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Basic</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
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
					<h4 class="text-blue">Default Basic Forms</h4>
					<p class="mb-30 font-14">All bootstrap element classies</p>
					<form class="form">
						<div class="form-group m-t-40 row">
							<label class="col-2 col-form-label">Text</label>
							<div class="col-10">
								<input class="form-control" type="text" placeholder="Johnny Brown">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-2 col-form-label">Search</label>
							<div class="col-10">
								<input class="form-control" placeholder="Search Here" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-2 col-form-label">Email</label>
							<div class="col-10">
								<input class="form-control" value="bootstrap@example.com" type="email">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-2 col-form-label">URL</label>
							<div class="col-10">
								<input class="form-control" value="https://getbootstrap.com" type="url">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-2 col-form-label">Telephone</label>
							<div class="col-10">
								<input class="form-control" value="1-(111)-111-1111" type="tel">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-2 col-form-label">Password</label>
							<div class="col-10">
								<input class="form-control" value="password" type="password">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-2 col-form-label">Number</label>
							<div class="col-10">
								<input class="form-control" value="100" type="number">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
							<div class="col-10">
								<input class="form-control datepicker" placeholder="Choose Date anf time" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-date-input" class="col-2 col-form-label">Date</label>
							<div class="col-10">
								<input class="form-control" value="2011-08-19" id="example-date-input" type="date">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-month-input" class="col-2 col-form-label">Month</label>
							<div class="col-10">
								<input class="form-control" value="2011-08" id="example-month-input" type="month">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-week-input" class="col-2 col-form-label">Week</label>
							<div class="col-10">
								<input class="form-control" value="2011-W33" id="example-week-input" type="week">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-2 col-form-label">Time</label>
							<div class="col-10">
								<input class="form-control datepicker" placeholder="Select time" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-month-input" class="col-2 col-form-label">Select</label>
							<div class="col-10">
								<select class="custom-select col-12" id="inlineFormCustomSelect">
									<option selected="">Choose...</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-color-input" class="col-2 col-form-label">Color</label>
							<div class="col-10">
								<input class="form-control" value="#563d7c" id="example-color-input" type="color">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-color-input" class="col-2 col-form-label">Input Range</label>
							<div class="col-10">
								<input class="form-control" id="range" value="50" type="range">
							</div>
						</div>
					</form>
					<div id="datetimepicker12"></div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>