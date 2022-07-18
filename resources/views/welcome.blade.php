<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> IDB SCHOLARSHIP PROJECT  </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="links">
                    <a href="{{url('/')}}"> Home  </a>
                    <a href="{{url('ComputerFundamental51')}}"> CF R-51 </a>
                    <a href="{{url('ComputerFundamental52')}}"> CF R-52 </a>
                    <a href="{{url('ValuePass/Shohagh/01918340047')}}"> ValuePass </a>
                    <a href="{{url('Pwad/Reba/Jannatul/Kanon')}}"> PWAD 51 </a>
                    <a href="{{url('/Accounts/Profile')}}"> RouteGroup </a>                    
                    <a href="{{url('/ControllerTypes')}}"> ControllerTypes </a>
                    <a href="{{url('/ResourceController')}}"> Resource Controller </a>
                    <a href="{{url('/HtmlSpecialChar')}}"> HtmlSpecialChar </a>
                    <a href="{{url('/home')}}"> Log In </a>
                    <a href="{{url('/Crud')}}"> CRUD </a>
                </div>
            
                <div class="title m-b-md">
                    Welcome to IsDB-BISEW
                </div>
                <div>
                    The Islamic Development Bank-Bangladesh Islamic Solidarity Educational Wakf (IsDB-BISEW) 
                    was established in 1987 following an agreement between the Islamic Development Bank and 
                    the Government of Bangladesh. IsDB-BISEW undertakes funding, formulating and implementing 
                    of programmes in the areas of education, developing human resources and strengthening 
                    educational institutions.
                    </br></br>
                    By focusing on workforce development through technical training and skilling in all its 
                    programmes and projects undertaken from 2003, it radically impacted the lives of about 
                    50,000 underprivileged Muslim youths till now.
                </div>
            </div>
        </div>
    </body>
</html>
