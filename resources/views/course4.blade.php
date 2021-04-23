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

            <img class="banner" src="ed1.jpg">
            </br></br>

            <h1 style="color:Tomato;">Education Services</h1>
            <div>

               <h4>Education Services Division is committed to developing a caring, quality education services grounded in Christian values and the principle of lifelong learning, integral human development and equal opportunities for all. The two services provided, namely, Pre-school Education Service, Vocational Training & Education Service, are registered with the Education Bureau.</h4>
            </div>
            </br>


            <h2 style="color:Tomato;">Pre-school Education</h2>
            <img src="ed2.jpg" align="right" width="35%" height="35%" >
            <div>

               <h4>With the objective of cultivating the full development of children regardless of their social background, the Caritas Pre-school Education Service provides full-day and half-day care and education for children aged three to six.</h4>
               <h4>Two kindergartens are operated with a total capacity of 220 students. Through the setting up of Pre-school Education Material Reference Centre and two Parent-child Resource Centres, Pre-school Education Service encourage parents to take a more enlightened and caring approach to child development through parental involvement in parent-teacher associations and parent-child activities.</h4>
            </div>

	    	</br></br>

            <h2 style="text-align:right;color:Tomato;">Vocational Training & Education Service&nbsp;&nbsp;&nbsp;&nbsp;</h2>

            </br>
            <img src="ed4.jpeg" align="left" width="35%" height="35%" style="padding-right: 20px;">
            <div>

                <h4>The Printing Training Centre and the Car Repair Workshop provide apprenticeship programmes to students from the Vocational Training Council, aiming at training youngsters interested in printing and auto repair to become qualified technicians in these two fields. The Centre and the Workshop also provide relevant services to the general public.</h4>
            </div>

            </br></br>
            <img src="ed5.jfif" align="left" width="35%" height="35%" style="padding-right: 20px;">
            <div>

                <h4>The Field Studies Centre provides educational courses on natural science to students and teachers in Hong Kong. It also runs programmes for the general public to promote their awareness on environmental protection and sustainability.</h4>
            </div>
    </body>
</html>
@endsection
