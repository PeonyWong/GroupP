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
            .banner { width:100%; }
            * {
              box-sizing: border-box;
            }
            .container {
              position: relative;
              max-width: 800px;
              margin: 0 auto;
            }

            .container img {vertical-align: middle;}

            .container .content {
              position: absolute;
              bottom: 0;
              background: rgb(0, 0, 0); /* Fallback color */
              background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
              color: #f1f1f1;
              width: 100%;
              padding: 20px;
            }

            h2{
                text-align: center;
            }

            table {
                 background-color: lightyellow;
                 padding: 10px;
            }


        </style>
    </head>
    <body>
        <div class="border">
            <h1>I Care Scheme</h1>
            <div>
                We provide professional counselling services. Under normal circumstances,
                day counseling services are available for appointments within two days.
            </div>
            <br/>
            <div class="container">
              <img src="iCare.jpeg" alt="Notebook" style="width:100%;">
              <div class="content">
                <h1>Our Service</h1>
                <ul>
                    <li>Emotional therapy, psychological counseling</li>
                    <li>Depression, anxiety, panic disorder treatment</li>
                    <li>Love counseling</li>
                    <li>Family therapy</li>
                </ul>
              </div>
            </div>
            <h2>Introduction</h2>
            <table style="width:50%;float:left; margin-right:5px;">
        <tbody>
        <tr>
          <td><h3>Target</h3></td>
        </tr>
        <tr>
            <td>
                Provide professional and caring counseling services, with sincerity and love
                to bring opportunities and hope to the recipients.
            </td>
        </tr>
        </tbody>
            </table>
            <table style="width:40%;float:right">
        <tbody>
        <tr>
          <td><h3>Ambition</h3></td>
        </tr>
        <tr>
            <td>
                Promote counseling services to every level of society, and hope that every friend in need can get help.
            </td>
        </tr>
        </tbody>
            </table>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <h2>Contact and make an appointment</h2>
            <div>You are welcome to call (+852) 1234 5678, email or use the following form to make an appointment with us.</div>
        </div>
    </body>
</html>
@endsection
