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
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Default Basic Forms</h4>
							<p class="mb-30 font-14">All bootstrap element classies</p>
						</div>
						<div class="pull-right">
							<a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<form>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Text</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Johnny Brown">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Search</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="Search Here" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Email</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="bootstrap@example.com" type="email">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">URL</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="https://getbootstrap.com" type="url">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="1-(111)-111-1111" type="tel">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="password" type="password">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Number</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="100" type="number">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Date</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" placeholder="Select Date" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Month</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control month-picker" placeholder="Select Month" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Time</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control time-picker" placeholder="Select time" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Select</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12">
									<option selected="">Choose...</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Color</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="#563d7c" type="color">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Input Range</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="50" type="range">
							</div>
						</div>
					</form>
					<div class="collapse collapse-box" id="basic-form1" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#copy-pre"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="copy-pre">
<form>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Text</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" type="text" placeholder="Johnny Brown">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Search</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" placeholder="Search Here" type="search">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Email</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="bootstrap@example.com" type="email">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">URL</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="https://getbootstrap.com" type="url">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="1-(111)-111-1111" type="tel">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Password</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="password" type="password">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Number</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="100" type="number">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Date</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control date-picker" placeholder="Select Date" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Month</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control month-picker" placeholder="Select Month" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Time</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control time-picker" placeholder="Select time" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Select</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12">
				<option selected="">Choose...</option>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Color</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="#563d7c" type="color">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Input Range</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="50" type="range">
		</div>
	</div>
</form>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms End -->

				<!-- horizontal Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">horizontal Basic Forms</h4>
							<p class="mb-30 font-14">All bootstrap element classies</p>
						</div>
						<div class="pull-right">
							<a href="#horizontal-basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<form>
						<div class="form-group">
							<label>Text</label>
							<input class="form-control" type="text" placeholder="Johnny Brown">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input class="form-control" value="bootstrap@example.com" type="email">
						</div>
						<div class="form-group">
							<label>URL</label>
							<input class="form-control" value="https://getbootstrap.com" type="url">
						</div>
						<div class="form-group">
							<label>Telephone</label>
							<input class="form-control" value="1-(111)-111-1111" type="tel">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" value="password" type="password">
						</div>
						<div class="form-group">
							<label>Readonly input</label>
							<input class="form-control" type="text" placeholder="Readonly input here…" readonly>
						</div>
						<div class="form-group">
							<label>Disabled input</label>
							<input type="text" class="form-control" placeholder="Disabled input" disabled="">
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<label class="weight-600">Custom Checkbox</label>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck2">
										<label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck3">
										<label class="custom-control-label" for="customCheck3">Check this custom checkbox</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck4">
										<label class="custom-control-label" for="customCheck4">Check this custom checkbox</label>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<label class="weight-600">Custom Radio</label>
									<div class="custom-control custom-radio mb-5">
										<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
										<label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
									</div>
									<div class="custom-control custom-radio mb-5">
										<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
										<label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
									</div>
									<div class="custom-control custom-radio mb-5">
										<input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
										<label class="custom-control-label" for="customRadio3">Or toggle this other custom radio</label>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Disabled select menu</label>
							<select class="form-control" disabled="">
								<option>Disabled select</option>
							</select>
						</div>
						<div class="form-group">
							<label>input plaintext</label>
							<input type="text" readonly class="form-control-plaintext" value="email@example.com">
						</div>
						<div class="form-group">
							<label>Textarea</label>
							<textarea class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Help text</label>
							<input type="text" class="form-control">
							<small class="form-text text-muted">
							  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
							</small>
						</div>
						<div class="form-group">
							<label>Example file input</label>
							<input type="file" class="form-control-file form-control height-auto">
						</div>
						<div class="form-group">
							<label>Custom file input</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input">
								<label class="custom-file-label">Choose file</label>
							</div>
						</div>
					</form>
					<div class="collapse collapse-box" id="horizontal-basic-form1" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#horizontal-basic"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#horizontal-basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="horizontal-basic">
<form>
	<div class="form-group">
		<label>Text</label>
		<input class="form-control" type="text" placeholder="Johnny Brown">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input class="form-control" value="bootstrap@example.com" type="email">
	</div>
	<div class="form-group">
		<label>URL</label>
		<input class="form-control" value="https://getbootstrap.com" type="url">
	</div>
	<div class="form-group">
		<label>Telephone</label>
		<input class="form-control" value="1-(111)-111-1111" type="tel">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input class="form-control" value="password" type="password">
	</div>
	<div class="form-group">
		<label>Readonly input</label>
		<input class="form-control" type="text" placeholder="Readonly input here…" readonly>
	</div>
	<div class="form-group">
		<label>Disabled input</label>
		<input type="text" class="form-control" placeholder="Disabled input" disabled="">
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<label class="weight-600">Custom Checkbox</label>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck1-1">
					<label class="custom-control-label" for="customCheck1-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck2-1">
					<label class="custom-control-label" for="customCheck2-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck3-1">
					<label class="custom-control-label" for="customCheck3-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck4-1">
					<label class="custom-control-label" for="customCheck4-1">Check this custom checkbox</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<label class="weight-600">Custom Radio</label>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio4">Toggle this custom radio</label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio5">Or toggle this other custom radio</label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio6">Or toggle this other custom radio</label>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Disabled select menu</label>
		<select class="form-control" disabled="">
			<option>Disabled select</option>
		</select>
	</div>
	<div class="form-group">
		<label>input plaintext</label>
		<input type="text" readonly class="form-control-plaintext" value="email@example.com">
	</div>
	<div class="form-group">
		<label>Textarea</label>
		<textarea class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>Help text</label>
		<input type="text" class="form-control">
		<small class="form-text text-muted">
		  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
		</small>
	</div>
	<div class="form-group">
		<label>Example file input</label>
		<input type="file" class="form-control-file form-control height-auto">
	</div>
	<div class="form-group">
		<label>Custom file input</label>
		<div class="custom-file">
			<input type="file" class="custom-file-input">
			<label class="custom-file-label">Choose file</label>
		</div>
	</div>
</form>

</code></pre>
						</div>
					</div>
				</div>
				<!-- horizontal Basic Forms End -->

				<!-- Form grid Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Form grid</h4>
							<p class="mb-30 font-14">All bootstrap element classies</p>
						</div>
						<div class="pull-right">
							<a href="#form-grid-form" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<form>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>col-md-3</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>col-md-3</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>col-md-3</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>col-md-3</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>col-md-6</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>col-md-6</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>col-md-6</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>col-md-3</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>col-md-3</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>col-md-12</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<label>col-md-2</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<label>col-md-2</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<label>col-md-2</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<label>col-md-2</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<label>col-md-2</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<label>col-md-2</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
					</form>
					<div class="collapse collapse-box" id="form-grid-form" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#form-grid"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#form-grid-form" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="form-grid">
<form>
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="form-group">
				<label>col-md-4</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="form-group">
				<label>col-md-4</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="form-group">
				<label>col-md-4</label>
				<input type="text" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-12">
			<div class="form-group">
				<label>col-md-3</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="form-group">
				<label>col-md-3</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="form-group">
				<label>col-md-3</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="form-group">
				<label>col-md-3</label>
				<input type="text" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="form-group">
				<label>col-md-6</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="form-group">
				<label>col-md-6</label>
				<input type="text" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="form-group">
				<label>col-md-6</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="form-group">
				<label>col-md-3</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="form-group">
				<label>col-md-3</label>
				<input type="text" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="form-group">
				<label>col-md-12</label>
				<input type="text" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-sm-12">
			<div class="form-group">
				<label>col-md-2</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-2 col-sm-12">
			<div class="form-group">
				<label>col-md-2</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-2 col-sm-12">
			<div class="form-group">
				<label>col-md-2</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-2 col-sm-12">
			<div class="form-group">
				<label>col-md-2</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-2 col-sm-12">
			<div class="form-group">
				<label>col-md-2</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-2 col-sm-12">
			<div class="form-group">
				<label>col-md-2</label>
				<input type="text" class="form-control">
			</div>
		</div>
	</div>
</form>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Form grid End -->

				<!-- Input Validation Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Input Validation</h4>
							<p class="mb-30 font-14">Validation styles for error, warning, and success</p>
						</div>
						<div class="pull-right">
							<a href="#input-validation-form" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<form>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group has-success">
									<label class="form-control-label">Input with success</label>
									<input type="text" class="form-control form-control-success">
									<div class="form-control-feedback">Success! You've done it.</div>
									<small class="form-text text-muted">Example help text that remains unchanged.</small>
								</div>
								<div class="form-group has-warning">
									<label class="form-control-label">Input with warning</label>
									<input type="text" class="form-control form-control-warning">
									<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
									<small class="form-text text-muted">Example help text that remains unchanged.</small>
								</div>
								<div class="form-group has-danger">
									<label class="form-control-label">Input with danger</label>
									<input type="text" class="form-control form-control-danger">
									<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
									<small class="form-text text-muted">Example help text that remains unchanged.</small>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group has-success row">
									<label class="form-control-label col-sm-12 col-md-3 col-form-label">Input with success</label>
									<div class="col-sm-12 col-md-9">
										<input type="text" class="form-control form-control-success">
										<div class="form-control-feedback">Success! You've done it.</div>
										<small class="form-text text-muted">Example help text that remains unchanged.</small>
									</div>
								</div>
								<div class="form-group has-warning row">
									<label class="form-control-label col-sm-12 col-md-3 col-form-label">Input with warning</label>
									<div class="col-sm-12 col-md-9">
										<input type="text" class="form-control form-control-warning">
										<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
										<small class="form-text text-muted">Example help text that remains unchanged.</small>
									</div>
								</div>
								<div class="form-group has-danger row">
									<label class="form-control-label col-sm-12 col-md-3 col-form-label">Input with danger</label>
									<div class="col-sm-12 col-md-9">
										<input type="text" class="form-control form-control-danger">
										<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
										<small class="form-text text-muted">Example help text that remains unchanged.</small>
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="collapse collapse-box" id="input-validation-form" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#input-validation"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#input-validation-form" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="input-validation">
<form>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="form-group has-success">
				<label class="form-control-label">Input with success</label>
				<input type="text" class="form-control form-control-success">
				<div class="form-control-feedback">Success! You've done it.</div>
				<small class="form-text text-muted">Example help text that remains unchanged.</small>
			</div>
			<div class="form-group has-warning">
				<label class="form-control-label">Input with warning</label>
				<input type="text" class="form-control form-control-warning">
				<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
				<small class="form-text text-muted">Example help text that remains unchanged.</small>
			</div>
			<div class="form-group has-danger">
				<label class="form-control-label">Input with danger</label>
				<input type="text" class="form-control form-control-danger">
				<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
				<small class="form-text text-muted">Example help text that remains unchanged.</small>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="form-group has-success row">
				<label class="form-control-label col-sm-12 col-md-2 col-form-label">Input with success</label>
				<div class="col-sm-12 col-md-10">
					<input type="text" class="form-control form-control-success">
					<div class="form-control-feedback">Success! You've done it.</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
			</div>
			<div class="form-group has-warning row">
				<label class="form-control-label col-sm-12 col-md-2 col-form-label">Input with warning</label>
				<div class="col-sm-12 col-md-10">
					<input type="text" class="form-control form-control-warning">
					<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
			</div>
			<div class="form-group has-danger row">
				<label class="form-control-label col-sm-12 col-md-2 col-form-label">Input with danger</label>
				<div class="col-sm-12 col-md-10">
					<input type="text" class="form-control form-control-danger">
					<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
			</div>
		</div>
	</div>
</form>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Input Validation End -->

			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>