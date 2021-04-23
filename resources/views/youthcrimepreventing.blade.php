@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<style>
		.container{padding-left:5%;padding-right:5%;padding-top:5%;padding-bottom:5%;}
		h2{display:inline;}
		img{width:20%;height:20%;float:right;}
		.eventinfo{margin-top:5%;margin-bottom:10%;}
		.hyperlink{padding-top:1%;float:right;padding-right:5%;color:black;font-size:20px;}
		#youthcrimepreventing{background-color:black;color:white;border-radius:5px;padding:10px 20px;position:relative;bottom:20%;left:45%;}
	</style>
</head>
<body>
	<a class="hyperlink" href="/youth_service"><b>Back</b></a>
	<div class="container">

		<div class="event">
			<h2>Youth Crime Preventing</h2>
			<img src="youthcrimepreventing.jpg"><br>
			<div class="eventinfo">
				<b>Date: 27<sup>th</sup>April,2021<br>
				Time: 15:00pm - 18:00pm<br>
				Venue: B Hall<br>
				Guest: Lee Tai Man</b><br>

				<p style="margin-top:10%;"><h3>Introduction:</h3>
				This talk aims to enhance teenager's awareness on preventing crimes. We had invited rich experienced criminologist Lee Tai Man as guest speaker. Teenagers can familiar what is crime and understand why they should not get into the crime.</p>

				<form action="join_youth_service.php" method="post">
					<input type="submit" name="youthcrimepreventing" id="youthcrimepreventing" value="Join Now!">
				</form>
			<?php
				if ( isset($_SESSION['youthcrimepreventing']) ) {
					echo $_SESSION['youthcrimepreventing'];
			}

			?>
			</div>

	</div>
</body>
</html>

@endsection
