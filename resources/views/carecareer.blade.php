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
		#careercare{background-color:black;color:white;border-radius:5px;padding:10px 20px;position:relative;bottom:20%;left:45%;}
	</style>
</head>
<body>
	<a class="hyperlink" href="/youth_service"><b>Back</b></a>
	<div class="container">

		<div class="event">
			<h2>Career Care</h2>
			<img src="careercare.jpg"><br>
			<div class="eventinfo">
				<b>Date: 26<sup>th</sup>April,2021<br>
				Time: 15:00pm - 18:00pm<br>
				Venue: A Hall<br>
				Guest: Chan Tai Man</b><br>

				<p style="margin-top:10%;"><h3>Introduction:</h3>
				This talk aims to provide different career information to teenagers. We had invited rich experienced social worker Chan Tai Man as guest speaker. Teenagers can get some advises on how to achieve their career path. Hopefully, teenagers can find their own career goal through his sharing.</p>

				<form action="join_youth_service.php" method="post">
					<input type="submit" name="careercare" id="careercare" value="Join Now!">
				</form>

			<?php
				if ( isset($_SESSION['careercare']) ) {
					echo $_SESSION['careercare'];
			}

			?>
			</div>

	</div>
</body>
</html>

@endsection
