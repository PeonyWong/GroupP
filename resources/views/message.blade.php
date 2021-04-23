@extends('layouts.app')

@section('content')
<html>
    <head>
        <style>
            .border {
                margin-top: 100px;
                margin-bottom: 100px;
                margin-right: 150px;
                margin-left: 80px;
            }
	        img{
		        height=200px;
                width=200px;
                border=1px;
            }
        </style>
    </head>
    <body>
        <div class="border">
            <h1>Message of Executive Director</h1>
            <div>
                <p style="float: left;">
                <img src="wendy.jpg">
                </p>
                <p>
                    Keeping up with the young people’s interests, concerns and passions is our target. We are proactive and attentive in delivering a wide variety of services, programs, and events as a result of our professional approach. Simultaneously, we must be creative in our delivery, whether it is in counseling or leadership development;  entrepreneurial exposures or educational opportunities; recreation, community, and sports; or exchanges and innovation. All of these programs are designed to keep Hong Kong youth competitive and active, as well as to encourage them to look beyond themselves in order to give back to the community.<br>
                    Ms. Wendy Po Lin Wu
                </p>
            </div>
        </div>
    </body>
</html>

@endsection
