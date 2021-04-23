@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<style>
		.container{padding-left:5%;padding-right:5%;padding-top:5%;padding-bottom:5%;}
		h2{display:inline;}
		img{width:20%;height:20%;float:right;}
		.event{margin-bottom:10%;}


	</style>
</head>
<body>

	<div class="container">

		<div class="event">
			<h2>Career Care</h2>
			<a href="/careercare"><img src="careercare.jpg"></a>
			<ul>
				<li>People with rich experience serve as a speakers.</li>
				<li>Their knowledge and perspectives on how to deal with others will surely bring greater inspiration to the students and benefit for life.</li>
			</ul>

		</div>
		<div class="event">
			<h2>Youth Crime Preventing</h2>
			<a href="/youthcrimepreventing"><img src="youthcrimepreventing.jpg"/></a>
			<h3>'Say "No" To Bullying' Lectures</h3>
			<ul>
				<li>Remind teenager the importance of complying with the law</li>
				<li>Encourage them to take the initiative to report crimes</li>
			</ul>

		</div>
		<div class="event">
			<h2>Creative Education</h2>
			<a href="/creativeeducation"><img src="creativeeducation.jpg"/></a>
			<ul>
				<li>Strengthen teenager’s thinking ability</li>
				<li>Inspire them to think out of the box</li>
			</ul>
		</div>
	</div>
</body>
</html>

@endsection
