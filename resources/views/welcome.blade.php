<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Harambe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 40;
                height: 40vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 45px;
            }
             .title1 {
                font-size: 25px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body>
        <div class="row">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  <br>CS 312C</br>
                  <br>Simple Student Profiling</br>
                  <br>Powered by: Harambe</br>

                </div>
               <div class="content">
               <div class="title1 m-b-md">
                <pr>Harambe - was a groupname consist of two members named Dwight Perez and Jozef Leonor, </pr><br><pr> a BSCS-4 students of Ateneo de Davao University. This is a simple student profiling for our class CS 312C.</pr><br><pr>This project consists of CRUD, the basic authentications, and the validations of Laravel. </pr><br><br>
                  <pr>For logging in as a sample tester:</pr><br><br>
                  <pr>Email: cs312c@f612.com</pr><br>
                  <pr>Password: perezleonor</pr><br><br>
                  <pr>Database Name: harambe_crud</pr><br>
                  </div>
                  </div>
            </div>
        </div>
    </body>
</html>
