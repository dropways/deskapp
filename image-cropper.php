<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css">
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Image Cropper</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Image Cropper</li>
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
							<h4 class="text-blue">Image Cropper</h4>
						</div>
					</div>
					<!-- Content -->
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-9">
							<!-- <h3>Demo:</h3> -->
							<div class="img-container">
								<img src="vendors/images/img3.jpg" id="image" alt="Picture">
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-3">
							<!-- <h3>Preview:</h3> -->
							<div class="docs-preview clearfix">
								<div class="img-preview preview-lg"></div>
								<div class="img-preview preview-md"></div>
								<div class="img-preview preview-sm"></div>
								<div class="img-preview preview-xs"></div>
							</div>

							<!-- <h3>Data:</h3> -->
							<!-- <h3>Data:</h3> -->
							<div class="docs-data">
								<div class="input-group input-group-sm">
									<span class="input-group-prepend">
										<label class="input-group-text" for="dataX">X</label>
									</span>
									<input type="text" class="form-control" id="dataX" placeholder="x">
									<span class="input-group-append">
										<span class="input-group-text">px</span>
									</span>
								</div>
								<div class="input-group input-group-sm">
									<span class="input-group-prepend">
										<label class="input-group-text" for="dataY">Y</label>
									</span>
									<input type="text" class="form-control" id="dataY" placeholder="y">
									<span class="input-group-append">
										<span class="input-group-text">px</span>
									</span>
								</div>
								<div class="input-group input-group-sm">
									<span class="input-group-prepend">
										<label class="input-group-text" for="dataWidth">Width</label>
									</span>
									<input type="text" class="form-control" id="dataWidth" placeholder="width">
									<span class="input-group-append">
										<span class="input-group-text">px</span>
									</span>
								</div>
								<div class="input-group input-group-sm">
									<span class="input-group-prepend">
										<label class="input-group-text" for="dataHeight">Height</label>
									</span>
									<input type="text" class="form-control" id="dataHeight" placeholder="height">
									<span class="input-group-append">
										<span class="input-group-text">px</span>
									</span>
								</div>
								<div class="input-group input-group-sm">
									<span class="input-group-prepend">
										<label class="input-group-text" for="dataRotate">Rotate</label>
									</span>
									<input type="text" class="form-control" id="dataRotate" placeholder="rotate">
									<span class="input-group-append">
										<span class="input-group-text">deg</span>
									</span>
								</div>
								<div class="input-group input-group-sm">
									<span class="input-group-prepend">
										<label class="input-group-text" for="dataScaleX">ScaleX</label>
									</span>
									<input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
								</div>
								<div class="input-group input-group-sm">
									<span class="input-group-prepend">
										<label class="input-group-text" for="dataScaleY">ScaleY</label>
									</span>
									<input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="actions">
						<div class="col-sm-12 col-md-12 col-lg-9 docs-buttons">
							<!-- <h3>Toolbar:</h3> -->
							<div class="btn-group">
								<button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.setDragMode(&quot;move&quot;)">
										<span class="fa fa-arrows"></span>
									</span>
								</button>
								<button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.setDragMode(&quot;crop&quot;)">
										<span class="fa fa-crop"></span>
									</span>
								</button>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(0.1)">
										<span class="fa fa-search-plus"></span>
									</span>
								</button>
								<button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(-0.1)">
										<span class="fa fa-search-minus"></span>
									</span>
								</button>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(-10, 0)">
										<span class="fa fa-arrow-left"></span>
									</span>
								</button>
								<button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(10, 0)">
										<span class="fa fa-arrow-right"></span>
									</span>
								</button>
								<button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(0, -10)">
										<span class="fa fa-arrow-up"></span>
									</span>
								</button>
								<button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(0, 10)">
										<span class="fa fa-arrow-down"></span>
									</span>
								</button>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotate(-45)">
										<span class="fa fa-rotate-left"></span>
									</span>
								</button>
								<button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotate(45)">
										<span class="fa fa-rotate-right"></span>
									</span>
								</button>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.scaleX(-1)">
										<span class="fa fa-arrows-h"></span>
									</span>
								</button>
								<button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.scaleY(-1)">
										<span class="fa fa-arrows-v"></span>
									</span>
								</button>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-primary" data-method="crop" title="Crop">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.crop()">
										<span class="fa fa-check"></span>
									</span>
								</button>
								<button type="button" class="btn btn-primary" data-method="clear" title="Clear">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.clear()">
										<span class="fa fa-remove"></span>
									</span>
								</button>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-primary" data-method="disable" title="Disable">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.disable()">
										<span class="fa fa-lock"></span>
									</span>
								</button>
								<button type="button" class="btn btn-primary" data-method="enable" title="Enable">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.enable()">
										<span class="fa fa-unlock"></span>
									</span>
								</button>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-primary" data-method="reset" title="Reset">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.reset()">
										<span class="fa fa-refresh"></span>
									</span>
								</button>
								<label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
									<input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
									<span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
										<span class="fa fa-upload"></span>
									</span>
								</label>
								<button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.destroy()">
										<span class="fa fa-power-off"></span>
									</span>
								</button>
							</div>

							<div class="btn-group btn-group-crop">
								<button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCroppedCanvas({ maxWidth: 4096, maxHeight: 4096 })">
										Get Cropped Canvas
									</span>
								</button>
								<button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCroppedCanvas({ width: 160, height: 90 })">
										160&times;90
									</span>
								</button>
								<button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
									<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCroppedCanvas({ width: 320, height: 180 })">
										320&times;180
									</span>
								</button>
							</div>

							<!-- Show the cropped image in modal -->
							<div class="modal fade docs-cropped" id="getCroppedCanvasModal" role="dialog" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body"></div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
										</div>
									</div>
								</div>
							</div><!-- /.modal -->

							<button type="button" class="btn btn-secondary" data-method="getData" data-option data-target="#putData">
								<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getData()">
									Get Data
								</span>
							</button>
							<button type="button" class="btn btn-secondary" data-method="setData" data-target="#putData">
								<span class="docs-tooltip" data-toggle="tooltip" title="cropper.setData(data)">
									Set Data
								</span>
							</button>
							<button type="button" class="btn btn-secondary" data-method="getContainerData" data-option data-target="#putData">
								<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getContainerData()">
									Get Container Data
								</span>
							</button>
							<button type="button" class="btn btn-secondary" data-method="getImageData" data-option data-target="#putData">
								<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getImageData()">
									Get Image Data
								</span>
							</button>
							<button type="button" class="btn btn-secondary" data-method="getCanvasData" data-option data-target="#putData">
								<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCanvasData()">
									Get Canvas Data
								</span>
							</button>
							<button type="button" class="btn btn-secondary" data-method="setCanvasData" data-target="#putData">
								<span class="docs-tooltip" data-toggle="tooltip" title="cropper.setCanvasData(data)">
									Set Canvas Data
								</span>
							</button>
							<button type="button" class="btn btn-secondary" data-method="getCropBoxData" data-option data-target="#putData">
								<span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCropBoxData()">
									Get Crop Box Data
								</span>
							</button>
							<button type="button" class="btn btn-secondary" data-method="setCropBoxData" data-target="#putData">
								<span class="docs-tooltip" data-toggle="tooltip" title="cropper.setCropBoxData(data)">
									Set Crop Box Data
								</span>
							</button>
							<button type="button" class="btn btn-secondary" data-method="moveTo" data-option="0">
								<span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)">
									Move to [0,0]
								</span>
							</button>
							<button type="button" class="btn btn-secondary" data-method="zoomTo" data-option="1">
								<span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)">
									Zoom to 100%
								</span>
							</button>
							<button type="button" class="btn btn-secondary" data-method="rotateTo" data-option="180">
								<span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)">
									Rotate 180°
								</span>
							</button>
							<button type="button" class="btn btn-secondary" data-method="scale" data-option="-2" data-second-option="-1">
								<span class="docs-tooltip" data-toggle="tooltip" title="cropper.scale(-2, -1)">
									Scale (-2, -1)
								</span>
							</button>
							<textarea class="form-control" id="putData" rows="1" placeholder="Get data to here or set data with this value"></textarea>

						</div><!-- /.docs-buttons -->

						<div class="col-sm-12 col-md-12 col-lg-3 docs-toggles">
							<!-- <h3>Toggles:</h3> -->
							<div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
								<label class="btn btn-primary active">
									<input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.7777777777777777">
									<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">
										16:9
									</span>
								</label>
								<label class="btn btn-primary">
									<input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1.3333333333333333">
									<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
										4:3
									</span>
								</label>
								<label class="btn btn-primary">
									<input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="1">
									<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
										1:1
									</span>
								</label>
								<label class="btn btn-primary">
									<input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="0.6666666666666666">
									<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
										2:3
									</span>
								</label>
								<label class="btn btn-primary">
									<input type="radio" class="sr-only" id="aspectRatio5" name="aspectRatio" value="NaN">
									<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
										Free
									</span>
								</label>
							</div>

							<div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
								<label class="btn btn-primary active">
									<input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
									<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
										VM0
									</span>
								</label>
								<label class="btn btn-primary">
									<input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
									<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
										VM1
									</span>
								</label>
								<label class="btn btn-primary">
									<input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
									<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
										VM2
									</span>
								</label>
								<label class="btn btn-primary">
									<input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
									<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
										VM3
									</span>
								</label>
							</div>

							<div class="dropdown dropup docs-options">
								<button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
									Toggle Options
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="toggleOptions">
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="responsive" type="checkbox" name="responsive" checked>
											<label class="form-check-label" for="responsive">responsive</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="restore" type="checkbox" name="restore" checked>
											<label class="form-check-label" for="restore">restore</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="checkCrossOrigin" type="checkbox" name="checkCrossOrigin" checked>
											<label class="form-check-label" for="checkCrossOrigin">checkCrossOrigin</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="checkOrientation" type="checkbox" name="checkOrientation" checked>
											<label class="form-check-label" for="checkOrientation">checkOrientation</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="modal" type="checkbox" name="modal" checked>
											<label class="form-check-label" for="modal">modal</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="guides" type="checkbox" name="guides" checked>
											<label class="form-check-label" for="guides">guides</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="center" type="checkbox" name="center" checked>
											<label class="form-check-label" for="center">center</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="highlight" type="checkbox" name="highlight" checked>
											<label class="form-check-label" for="highlight">highlight</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="background" type="checkbox" name="background" checked>
											<label class="form-check-label" for="background">background</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="autoCrop" type="checkbox" name="autoCrop" checked>
											<label class="form-check-label" for="autoCrop">autoCrop</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="movable" type="checkbox" name="movable" checked>
											<label class="form-check-label" for="movable">movable</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="rotatable" type="checkbox" name="rotatable" checked>
											<label class="form-check-label" for="rotatable">rotatable</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="scalable" type="checkbox" name="scalable" checked>
											<label class="form-check-label" for="scalable">scalable</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="zoomable" type="checkbox" name="zoomable" checked>
											<label class="form-check-label" for="zoomable">zoomable</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="zoomOnTouch" type="checkbox" name="zoomOnTouch" checked>
											<label class="form-check-label" for="zoomOnTouch">zoomOnTouch</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="zoomOnWheel" type="checkbox" name="zoomOnWheel" checked>
											<label class="form-check-label" for="zoomOnWheel">zoomOnWheel</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="cropBoxMovable" type="checkbox" name="cropBoxMovable" checked>
											<label class="form-check-label" for="cropBoxMovable">cropBoxMovable</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="cropBoxResizable" type="checkbox" name="cropBoxResizable" checked>
											<label class="form-check-label" for="cropBoxResizable">cropBoxResizable</label>
										</div>
									</li>
									<li class="dropdown-item">
										<div class="form-check">
											<input class="form-check-input" id="toggleDragModeOnDblclick" type="checkbox" name="toggleDragModeOnDblclick" checked>
											<label class="form-check-label" for="toggleDragModeOnDblclick">toggleDragModeOnDblclick</label>
										</div>
									</li>
								</ul>
							</div><!-- /.dropdown -->

						</div><!-- /.docs-toggles -->
					</div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/cropperjs/dist/cropper.js"></script>
	<script src="src/plugins/cropperjs/dist/cropper-init.js"></script>
	<!-- <script type="text/javascript">
		jQuery(document).ready(function(){
			'use strict';

			var Cropper = window.Cropper;
			var URL = window.URL || window.webkitURL;
			var container = document.querySelector('.img-container');
			var image = container.getElementsByTagName('img').item(0);
			var download = document.getElementById('download');
			var actions = document.getElementById('actions');
			var dataX = document.getElementById('dataX');
			var dataY = document.getElementById('dataY');
			var dataHeight = document.getElementById('dataHeight');
			var dataWidth = document.getElementById('dataWidth');
			var dataRotate = document.getElementById('dataRotate');
			var dataScaleX = document.getElementById('dataScaleX');
			var dataScaleY = document.getElementById('dataScaleY');
			var options = {
				aspectRatio: 16 / 9,
				preview: '.img-preview',
				ready: function (e) {
					console.log(e.type);
				},
				cropstart: function (e) {
					console.log(e.type, e.detail.action);
				},
				cropmove: function (e) {
					console.log(e.type, e.detail.action);
				},
				cropend: function (e) {
					console.log(e.type, e.detail.action);
				},
				crop: function (e) {
					var data = e.detail;

					console.log(e.type);
					dataX.value = Math.round(data.x);
					dataY.value = Math.round(data.y);
					dataHeight.value = Math.round(data.height);
					dataWidth.value = Math.round(data.width);
					dataRotate.value = typeof data.rotate !== 'undefined' ? data.rotate : '';
					dataScaleX.value = typeof data.scaleX !== 'undefined' ? data.scaleX : '';
					dataScaleY.value = typeof data.scaleY !== 'undefined' ? data.scaleY : '';
				},
				zoom: function (e) {
					console.log(e.type, e.detail.ratio);
				}
			};
			var cropper = new Cropper(image, options);
			var originalImageURL = image.src;
			var uploadedImageType = 'image/jpeg';
			var uploadedImageName = 'cropped.jpg';
			var uploadedImageURL;

			$('[data-toggle="tooltip"]').tooltip();

			if (!document.createElement('canvas').getContext) {
				$('button[data-method="getCroppedCanvas"]').prop('disabled', true);
			}

			if (typeof document.createElement('cropper').style.transition === 'undefined') {
				$('button[data-method="rotate"]').prop('disabled', true);
				$('button[data-method="scale"]').prop('disabled', true);
			}

			if (typeof download.download === 'undefined') {
				download.className += ' disabled';
			}

			actions.querySelector('.docs-toggles').onchange = function (event) {
				var e = event || window.event;
				var target = e.target || e.srcElement;
				var cropBoxData;
				var canvasData;
				var isCheckbox;
				var isRadio;

				if (!cropper) {
					return;
				}

				if (target.tagName.toLowerCase() === 'label') {
					target = target.querySelector('input');
				}

				isCheckbox = target.type === 'checkbox';
				isRadio = target.type === 'radio';

				if (isCheckbox || isRadio) {
					if (isCheckbox) {
						options[target.name] = target.checked;
						cropBoxData = cropper.getCropBoxData();
						canvasData = cropper.getCanvasData();

						options.ready = function () {
							console.log('ready');
							cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
						};
					} else {
						options[target.name] = target.value;
						options.ready = function () {
							console.log('ready');
						};
					}

					cropper.destroy();
					cropper = new Cropper(image, options);
				}
			};


			actions.querySelector('.docs-buttons').onclick = function (event) {
				var e = event || window.event;
				var target = e.target || e.srcElement;
				var cropped;
				var result;
				var input;
				var data;

				if (!cropper) {
					return;
				}

				while (target !== this) {
					if (target.getAttribute('data-method')) {
						break;
					}

					target = target.parentNode;
				}

				if (target === this || target.disabled || target.className.indexOf('disabled') > -1) {
					return;
				}

				data = {
					method: target.getAttribute('data-method'),
					target: target.getAttribute('data-target'),
					option: target.getAttribute('data-option') || undefined,
					secondOption: target.getAttribute('data-second-option') || undefined
				};

				cropped = cropper.cropped;

				if (data.method) {
					if (typeof data.target !== 'undefined') {
						input = document.querySelector(data.target);

						if (!target.hasAttribute('data-option') && data.target && input) {
							try {
								data.option = JSON.parse(input.value);
							} catch (e) {
								console.log(e.message);
							}
						}
					}

					switch (data.method) {
						case 'rotate':
						if (cropped && options.viewMode > 0) {
							cropper.clear();
						}

						break;

						case 'getCroppedCanvas':
						try {
							data.option = JSON.parse(data.option);
						} catch (e) {
							console.log(e.message);
						}

						if (uploadedImageType === 'image/jpeg') {
							if (!data.option) {
								data.option = {};
							}

							data.option.fillColor = '#fff';
						}

						break;
					}

					result = cropper[data.method](data.option, data.secondOption);

					switch (data.method) {
						case 'rotate':
						if (cropped && options.viewMode > 0) {
							cropper.crop();
						}

						break;

						case 'scaleX':
						case 'scaleY':
						target.setAttribute('data-option', -data.option);
						break;

						case 'getCroppedCanvas':
						if (result) {
							$('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

							if (!download.disabled) {
								download.download = uploadedImageName;
								download.href = result.toDataURL(uploadedImageType);
							}
						}

						break;

						case 'destroy':
						cropper = null;

						if (uploadedImageURL) {
							URL.revokeObjectURL(uploadedImageURL);
							uploadedImageURL = '';
							image.src = originalImageURL;
						}

						break;
					}

					if (typeof result === 'object' && result !== cropper && input) {
						try {
							input.value = JSON.stringify(result);
						} catch (e) {
							console.log(e.message);
						}
					}
				}
			};

			document.body.onkeydown = function (event) {
				var e = event || window.event;

				if (!cropper || this.scrollTop > 300) {
					return;
				}

				switch (e.keyCode) {
					case 37:
					e.preventDefault();
					cropper.move(-1, 0);
					break;

					case 38:
					e.preventDefault();
					cropper.move(0, -1);
					break;

					case 39:
					e.preventDefault();
					cropper.move(1, 0);
					break;

					case 40:
					e.preventDefault();
					cropper.move(0, 1);
					break;
				}
			};

			var inputImage = document.getElementById('inputImage');

			if (URL) {
				inputImage.onchange = function () {
					var files = this.files;
					var file;

					if (cropper && files && files.length) {
						file = files[0];

						if (/^image\/\w+/.test(file.type)) {
							uploadedImageType = file.type;
							uploadedImageName = file.name;

							if (uploadedImageURL) {
								URL.revokeObjectURL(uploadedImageURL);
							}

							image.src = uploadedImageURL = URL.createObjectURL(file);
							cropper.destroy();
							cropper = new Cropper(image, options);
							inputImage.value = null;
						} else {
							window.alert('Please choose an image file.');
						}
					}
				};
			} else {
				inputImage.disabled = true;
				inputImage.parentNode.className += ' disabled';
			}
		});

	</script> -->
</body>
</html>