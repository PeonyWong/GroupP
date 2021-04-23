@extends('layouts.app')

@section('content')
<html>
    <head>
        <style>
            .banner { width:100%; }
            .border2 {
                margin-top: 100px;
                margin-bottom: 100px;
                margin-right: 100px;
                margin-left: 80px;
                line-height: 10px
            }

        </style>
    </head>
    <body>
        <div class="border">

            <img class="banner" src="leader.jpg">
            </br></br>

            <h1 style="color:Tomato;">Leadership Training Program</h1>
            <div>

               <h4>Enhance your high impact leadership capabilities and apply these skills to your organisation.</h4>
            </div>

	    	</br></br>
	    	<h1 style="font-family:Arial Black;text-align:center;color:Tomato;">You'll walk away with:</h1>
	    	</br>
	    	<ol>
			    <li>A high-impact leadership action plan to become a more effective leader in your current and future spheres of influence.</li>
			    <li>Key leadership competencies to lead with impact in a volatile, uncertain, complex and ambiguousworld.</li>
		    	<li>Access to the University of Cambridge Institute for Sustainability Leadership alumni network, consisting of senior leaders and practitioners in every industry.</li>
	    	</ol>

	    	</br></br>

	    	<center><img src="m3.webp" width="80%" height="80%" ></center>

	    	<div class="border2">

	    	<h1 style="font-family:Arial Black;text-align:center;color:Tomato;">Course outline</h1>
	    	</br></br></br>

            <h4 style="color:Tomato;">Module 1:</h4>
            <h4 >High impact leadership and its importance</h4>

            <h4 style="color:Tomato;">Module 2:</h4>
            <h4 >Exploring the context for leadership and the related challenges</h4>
            <img src="m2.png" align="right" width="35%" height="35%">
            <h4 style="color:Tomato;">Module 3:</h4>
            <h4 >What does high impact leadership look like?</h4>

            <h4 style="color:Tomato;">Module 4:</h4>
            <h4 >The future we want, the leadership we need</h4>

            <h4 style="color:Tomato;">Module 5:</h4>
            <h4 >High impact leadership capabilities</h4>

            <h4 style="color:Tomato;">Module 6:</h4>
            <h4 >Communicating for influence</h4>

            <h4 style="color:Tomato;">Module 7:</h4>
            <h4 >Developing the mindset and skills for innovation</h4>

            <h4 style="color:Tomato;">Module 8:</h4>
            <h4 >Rewiring your leadership to achieve your goals</h4>

            </div>

            <center><img src="m4.png" width="80%" height="80%" ></center>

    </body>
</html>

@endsection
