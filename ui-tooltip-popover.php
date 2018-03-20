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
								<h4>Tooltip &amp; Popover</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">UI Tooltip &amp; Popover</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<h4>Tooltips</h4>
					<p class="pb-20">you can use <code>data-toggle="tooltip" title="Tooltip on top"</code></p>
					<div class="pb-20">
						<button type="button" class="btn btn-outline-secondary margin-5" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
							Tooltip on top
						</button>
						<button type="button" class="btn btn-outline-secondary margin-5" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
							Tooltip on right
						</button>
						<button type="button" class="btn btn-outline-secondary margin-5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
							Tooltip on bottom
						</button>
						<button type="button" class="btn btn-outline-secondary margin-5" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
							Tooltip on left
						</button>
					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<h4>Popovers</h4>
					<p class="pb-20">you can use <code>data-container="body" data-toggle="popover" data-content=""</code></p>
					<div class="pb-20">
						<button type="button" class="btn btn-outline-primary margin-5" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="popover">
							Popover on top
						</button>
						<button type="button" class="btn btn-outline-primary margin-5" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="popover">
							Popover on right
						</button>
						<button type="button" class="btn btn-outline-primary margin-5" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus	sagittis lacus vel augue laoreet rutrum faucibus." title="popover">
							Popover on bottom
						</button>
						<button type="button" class="btn btn-outline-primary margin-5" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="popover">
							Popover on left
						</button>
					</div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>