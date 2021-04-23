<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            .border {
                margin-top: 100px;
                margin-bottom: 100px;
                margin-right: 100px;
                margin-left: 80px;
                line-height: 30px
            }

            .navbar {
                overflow: hidden;
                background-color: #333;
            }

            .navbar a {
                float: left;
                font-size: 16px;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            .dropdown {
                float: left;
                overflow: hidden;
            }

            .dropdown .dropbtn {
                font-size: 16px;
                border: none;
                outline: none;
                color: white;
                padding: 14px 16px;
                background-color: inherit;
                font-family: inherit;
                margin: 0;
            }

            .navbar a:hover, .dropdown:hover .dropbtn {
                background-color: red;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                float: none;
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .dropdown-content a:hover {
                background-color: #ddd;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .survey {
                margin-left: auto;
                margin-right: auto;
                width: 90%;
            }
            .survey .radiobtn {
                text-align: center;
            }
            .survey tr td{
                border: 2px
            }
        </style>
    </head>
    <body>
        <div class="navbar">
          <div class="dropdown">
            <button class="dropbtn">Home
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="/login">Login</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">About Us
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="/history">History</a>
              <a href="/message">Message of Executive Director</a>
              <a href="/highlight">Program Highlight</a>
              <a href="/album">Photo Album</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">New Services & Courses
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="/course1">First Aid Course</a>
              <a href="/course2">Volunteer Services</a>
              <a href="/course3">Leadership Training</a>
              <a href="/course4">Education Services</a>
              <a href="/course5">Parenting Service</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">Youth Services
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="/careercare">Career Care</a>
              <a href="/youthcrimepreventing">Youth Crime Partening</a>
              <a href="/creativeeducation">Creative Education</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">Welling for Youths
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="/scheme">I. Care Scheme</a>
              <a href="/volunteer">Volunteer Movement</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">Welling & Activity for Eldery
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="/brainStorming">Brain Storming</a>
              <a href="/retire">Happy Retirement Life</a>
              <a href="/healthCare">HealthCare</a>
            </div>
          </div>
          <a href="/contact_us">Contact Us</a>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>


