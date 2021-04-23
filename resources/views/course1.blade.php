@extends('layouts.app')

@section('content')
<html>
    <head>
        <style>
            .border {
                margin-top: 100px;
                margin-bottom: 100px;
                margin-right: 100px;
                margin-left: 80px;
		        line-height: 30px
            }

            .banner { width:100%; }

        </style>
    </head>
    <body>
        <div class="border">

            <img class="banner" src="firstaid.jfif">
            </br></br>

            <h1 style="color:Tomato;">First Aid Course</h1>

            <div>

               <h4>First aid knowledge and skills promote safety awareness in home, at work, at play, on streets and highways. Through studying first aid, a person is prepared to assist others wisely. He is able to distinguish between what to do and what not to do. </h4>

            </div>
            </br>
            <h2 style="text-align: left;color:Tomato;">Course purpose</h2>
            <h4 style="text-align: left">Know and practice first aid treatment methods, including cardiopulmonary resuscitation</h4>
            <h4 style="text-align: left">In special circumstances, first-aid treatment methods should be used.</h4>


		    <img src="Cardiopulmonary resuscitation.webp" align="right" width="35%" height="35%">
		    <h4 style="text-align: left;">Topics:</h4>
		    <ul>
		    	<li>Basic principles of first aid</li>
		    	<li>Cardiopulmonary resuscitation</li>
		    	<li>Burns and scalds</li>
		    	<li>Facture</li>
		    	<li>First aid materials and dressing method</li>
		    	<li>Transport the injured</li>
		    </ul>
            </br>
		    <h2  style="text-align: left;color:Tomato;">Course hours</h2>
		    <h4  style="text-align: left">Thirty hours</h4>
		    <h4  style="text-align: left">(one session THREE hours, TEN session in total)</h4>
        </div>
    </body>
</html>


@endsection
