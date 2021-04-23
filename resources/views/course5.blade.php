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

            <img class="banner" src="p1.png">
            </br></br>

            <h1 style="color:Tomato;">Parenting Services</h1>

            <div>

               <h4>To assist parents who cannot take care of their young children because of work or other reasons, the Social Welfare Department subsidises non-governmental organisations to provide a variety of child care services, to meet the different needs of the parents and their young children.</h4>
            </div>
            </br>
            <h2  style="text-align: left;color:Tomato;">Type of Services</h2>
            <h4  style="text-align: left;color:Tomato;">Child Care Centre (CCC) Service [including standalone CCCs and CCCs attached to Kindergartens (KGs)]</h4>


		<img src="p2.png" align="right" width="35%" height="35%" style="padding-right: 20px;">
		<ul>
			<li>CCC Services aims to provide day care to the children aged from birth to under 3 in a safe, stimulating and learning environment, to enhance their growth and development.</li>
			<li>Service Hours of CCCs is from 8:00a.m. to 6:00p.m. (Monday to Friday) and from 8:00a.m. to 1:00p.m. on Saturday.</li>

		</ul>
        </br></br></br>
        <h4  style="text-align: left;color:Tomato;">Occasional Child Care Service (OCCS)</h4>
		<img src="p3.png" align="right" width="35%" height="35%" style="padding-right: 20px;">
		<ul>
			<li>Provide OCCS on full-day, half-day or two-hour sessional basis at some standalone CCCs and KG-cum-CCCs for parents or carers with sudden engagements or various commitments.</li>
			<li>Service Hours of OCCS is from 8:00a.m. to 6:00p.m. (Monday to Friday) and from 8:00 a.m. to 1:00p.m. on Saturday.</li>
            <li>Fee for OCCS (Basic fee level is a two-hour session):</li>
            <ul>
                <li>$64 for a full-day session, excluding meal charge</li>
                <li>$32 for a half-day session, excluding meal charge</li>
                <li>$16 for a two-hour session</li>
            </ul>
		</ul>

		</br></br></br><img src="p4.jpg" align="right" width="35%" height="35%" style="padding-right: 20px;">
        <h4  style="text-align: left;color:Tomato;">Mutual Help Child Care Centre (MHCCC)</h4>

		<ul>
			<li>Aims at promoting mutual help on child care within the neighbourhood.</li>
			<li>Sets up by non-profit-making organisations to provide care for not more than 14 babies and toddlers.</li>
		</ul>

		</br></br></br>
        <h4  style="text-align: left;color:Tomato;">Neighbourhood Support Child Care Project</h4>
        <img src="p5.jpg" align="right" width="35%" height="35%" style="padding-right: 20px;">
		<ul>
			<li>Provides flexible form of child care service for children aged under 9, and promotes community participation and mutual help in the neighbourhood.</li>
			<li>Two service components:</li>
			<ul>
                <li>Home-based child care service</li>
                <li>Centre-based care group</li>
            </ul>
            <li>Home-based child care service operates from 7:00am to 11:00pm; and centre-based care group operates till late evenings and covers some weekends.</li>
		</ul>


        </div>
    </body>
</html>
@endsection
