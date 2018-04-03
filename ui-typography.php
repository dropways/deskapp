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
								<h4>Typography</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">UI Typography</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h4 class="mb-30">Headings</h4>
							<h1>h1. Bootstrap heading</h1>
							<h2 class="mb-10">h2. Bootstrap heading</h2>
							<h3 class="mb-10">h3. Bootstrap heading</h3>
							<h4 class="mb-10">h4. Bootstrap heading</h4>
							<h5 class="mb-10">h5. Bootstrap heading</h5>
							<h6 class="mb-10">h6. Bootstrap heading</h6>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h4 class="mb-30">Inline text elements</h4>
							<p>You can use the mark tag to <mark>highlight</mark> text.</p>
							<p><del>This line of text is meant to be treated as deleted text.</del></p>
							<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
							<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
							<p><u>This line of text will render as underlined</u></p>
							<p><small>This line of text is meant to be treated as fine print.</small></p>
							<p><strong>This line rendered as bold text.</strong></p>
							<p><em>This line rendered as italicized text.</em></p>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h4 class="mb-30">Display headings</h4>
							<h1 class="display-1">Display 1</h1>
							<h1 class="display-2">Display 2</h1>
							<h1 class="display-3">Display 3</h1>
							<h1 class="display-4">Display 4</h1>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
							<h4 class="mb-20">Blockquotes</h4>
							<blockquote class="blockquote">
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
								<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
							<blockquote class="blockquote text-right">
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
								<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
						</div>
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h4 class="mb-30">List Inline</h4>
							<ul class="list-inline">
								<li class="list-inline-item">Lorem ipsum</li>
								<li class="list-inline-item">Phasellus iaculis</li>
								<li class="list-inline-item">Nulla volutpat</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h4 class="mb-30">List Unstyled</h4>
							<ul class="list-unstyled">
								<li>Lorem ipsum dolor sit amet</li>
								<li>Consectetur adipiscing elit</li>
								<li>Integer molestie lorem at massa</li>
								<li>Facilisis in pretium nisl aliquet</li>
								<li>Nulla volutpat aliquam velit
									<ul>
										<li>Phasellus iaculis neque</li>
										<li>Purus sodales ultricies</li>
										<li>Vestibulum laoreet porttitor sem</li>
										<li>Ac tristique libero volutpat at</li>
									</ul>
								</li>
								<li>Faucibus porta lacus fringilla vel</li>
								<li>Aenean sit amet erat nunc</li>
								<li>Eget porttitor lorem</li>
							</ul>
						</div>
					</div>
					<div class="col-md-8 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<h4 class="mb-30">Description list alignment</h4>
							<dl class="row">
								<dt class="col-sm-3">Description lists</dt>
								<dd class="col-sm-9">A description list is perfect for defining terms.</dd>

								<dt class="col-sm-3">Euismod</dt>
								<dd class="col-sm-9">
									<p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
									<p>Donec id elit non mi porta gravida at eget metus.</p>
								</dd>

								<dt class="col-sm-3">Malesuada porta</dt>
								<dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

								<dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
								<dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

								<dt class="col-sm-3">Nesting</dt>
								<dd class="col-sm-9">
									<dl class="row">
										<dt class="col-sm-4">Nested definition list</dt>
										<dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
									</dl>
								</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>