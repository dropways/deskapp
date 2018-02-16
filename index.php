<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-30 customscroll height-100-p">
			<div class="row clearfix">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="bg-white pd-20 box-shadow border-radius-5 margin-5">
						<form>
							<div class="form-group">
								<label>Email address</label>
								<input type="email" class="form-control"  placeholder="Enter email">
								<small class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" placeholder="Password">
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Check me out</label>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>