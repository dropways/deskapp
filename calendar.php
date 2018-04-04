<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/fullcalendar/fullcalendar.css">
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
								<h4>Calendar</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Calendar</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="pd-20 bg-white box-shadow mb-30">
					<div class="row calendar-wrap">
						<div class="col-xl-2 col-lg-3 col-md-12 col-sm-12">
							<div id='external-events'>
								<h4 class="mb-30">Draggable Events</h4>
								<div class='fc-event'>My Event 1</div>
								<div class='fc-event'>My Event 2</div>
								<div class='fc-event'>My Event 3</div>
								<div class='fc-event'>My Event 4</div>
								<div class='fc-event'>My Event 5</div>
								<div class="custom-control custom-checkbox mb-5">
									<input type='checkbox' class="custom-control-input" id='drop-remove' />
									<label class="custom-control-label" for='drop-remove'>remove after drop</label>
								</div>
							</div>
						</div>
						<div class="col-xl-10 col-lg-9 col-md-12 col-sm-12">
							<div id='calendar'></div>
						</div>
					</div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/fullcalendar/lib/jquery-ui.min.js"></script>
	<script src="src/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script>
		$(document).ready(function() {

			$('#external-events .fc-event').each(function() {
				$(this).data('event', {
					title: $.trim($(this).text()),
					stick: true
				});
				$(this).draggable({
					zIndex: 999,
					revert: true,
					revertDuration: 0
				});

			});
			$('#calendar').fullCalendar({
				themeSystem: 'bootstrap4',
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				editable: true,
				droppable: true,
				drop: function() {
					if ($('#drop-remove').is(':checked')) {
						$(this).remove();
					}
				},
				events: [
				{
					title: 'All Day Event',
					start: '2018-04-01'
				},
				{
					title: 'Long Event',
					start: '2018-04-07',
					end: '2018-04-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2018-04-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2018-04-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2018-04-11',
					end: '2018-04-13'
				},
				{
					title: 'Meeting',
					start: '2018-04-12T10:30:00',
					end: '2018-04-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2018-04-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2018-04-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2018-04-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2018-04-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2018-04-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2018-04-28'
				}
				]
			});
		});
	</script>
</body>
</html>