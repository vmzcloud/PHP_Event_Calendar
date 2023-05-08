<?php
include 'Calendar.php';
$calendar = new Calendar(date("Y-m-d"));
$calendar->add_event('Birthday', '2023-05-13', 1, 'orange');
$calendar->add_event('Doctors', '2023-05-01', 1, 'red');
$calendar->add_event('Holiday', '2023-05-26', 7, 'purple');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Event Calendar</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="calendar.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	    <nav class="navtop">
	    	<div>
	    		<h1>Event Calendar</h1>
	    	</div>
	    </nav>
		<div class="content home">
			<?=$calendar?>
		</div>
	</body>
</html>