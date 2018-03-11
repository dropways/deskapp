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
								<h4>Basic Tables</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
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
				<!-- basic table  Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Basic Table</h4>
							<p>Add class <code>.table</code></p>
						</div>
						<div class="pull-right">
							<a href="#basic-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First</th>
								<th scope="col">Last</th>
								<th scope="col">Handle</th>
								<th scope="col">Tag</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td><span class="badge badge-primary">Primary</span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td><span class="badge badge-secondary">Secondary</span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td><span class="badge badge-success">Success</span></td>
							</tr>
						</tbody>
					</table>
					<div class="collapse collapse-box" id="basic-table" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#basic-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#basic-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="basic-table-code">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
    </tr>
  </tbody>
</table>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- basic table  End -->
				<!-- Bordered table  start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Bordered table</h4>
							<p>Add <code>.table  .table-bordered</code> for borders on all sides of the table and cells.</p>
						</div>
						<div class="pull-right">
							<a href="#border-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First</th>
								<th scope="col">Last</th>
								<th scope="col">Handle</th>
								<th scope="col">Tag</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td><span class="badge badge-primary">Primary</span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td><span class="badge badge-secondary">Secondary</span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td><span class="badge badge-success">Success</span></td>
							</tr>
						</tbody>
					</table>
					<div class="collapse collapse-box" id="border-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#border-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#border-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="border-table-code">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
    </tr>
  </tbody>
</table>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Bordered table End -->
				<!-- Striped table start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Striped table</h4>
							<p>Add <code>.table  .table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
						</div>
						<div class="pull-right">
							<a href="#striped-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First</th>
								<th scope="col">Last</th>
								<th scope="col">Handle</th>
								<th scope="col">Tag</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td><span class="badge badge-primary">Primary</span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td><span class="badge badge-secondary">Secondary</span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td><span class="badge badge-success">Success</span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td><span class="badge badge-secondary">Secondary</span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td><span class="badge badge-success">Success</span></td>
							</tr>
						</tbody>
					</table>
					<div class="collapse collapse-box" id="striped-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#striped-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#striped-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="striped-table-code">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
    </tr>
  </tbody>
</table>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Striped table End -->
				<!-- Responsive tables Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Responsive table</h4>
							<p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code>.table  .table-responsive</code> Or, pick a maximum breakpoint with which to have a responsive table up to by using<code>.table-responsive{-sm|-md|-lg|-xl}</code>.</p>
						</div>
						<div class="pull-right">
							<a href="#responsive-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First</th>
									<th scope="col">Last</th>
									<th scope="col">Handle</th>
									<th scope="col">Tag</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td><span class="badge badge-primary">Primary</span></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
									<td><span class="badge badge-secondary">Secondary</span></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
									<td><span class="badge badge-secondary">Secondary</span></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="collapse collapse-box" id="responsive-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#responsive-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#responsive-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="responsive-table-code">
<div class="table-responsive">
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	    </tr>
	  </tbody>
	</table>
</div>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Responsive tables End -->
				<!-- Contextual classes Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Contextual classes</h4>
							<p>Use classes <code>( .table-active, .table-success, .table-info, .table-warning, .table-danger )</code> to color table rows or individual cells</p>
						</div>
						<div class="pull-right">
							<a href="#contextual-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First</th>
									<th scope="col">Last</th>
									<th scope="col">Handle</th>
									<th scope="col">Tag</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-active">
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td><span class="badge badge-primary">Primary</span></td>
								</tr>
								<tr class="table-primary">
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
									<td><span class="badge badge-secondary">Secondary</span></td>
								</tr>
								<tr class="table-secondary">
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
								<tr class="table-success">
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
									<td><span class="badge badge-secondary">Secondary</span></td>
								</tr>
								<tr class="table-danger">
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
								<tr class="table-warning">
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
								<tr class="table-info">
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
								<tr class="table-dark">
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
								<tr class="table-light">
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="collapse collapse-box" id="contextual-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#contextual-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#contextual-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="contextual-table-code">
<div class="table-responsive">
	<table class="table table-striped">
	  <tbody>
	    <tr class="table-active"><td></td></tr>
		<tr class="table-primary"><td></td></tr>
		<tr class="table-secondary"><td></td></tr>
		<tr class="table-success"><td></td></tr>
		<tr class="table-danger"><td></td></tr>
		<tr class="table-warning"><td></td></tr>
		<tr class="table-info"><td></td></tr>
		<tr class="table-light"><td></td></tr>
		<tr class="table-dark"><td></td></tr>
	  </tbody>
	</table>
</div>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Contextual classes End -->
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>