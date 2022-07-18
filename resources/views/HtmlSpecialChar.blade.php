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
                    <a href="{{url('/')}}"> Next </a>                    
                    <a href="{{url('/')}}"> Next </a>
                </div>
            
                <div class="title m-b-md">
                    Example of Html Special Charecter
                </div>
                <div>
                    1. {!!$OneHeadLine!!}    </br>
                    2. {{$OneHeadLine}}    </br></br>
                    3. {!!$ScriptAttack!!}    </br>
                    4. {{$ScriptAttack}}    </br>                
                    
                    
                    
                    </br>
                   
                </div>
            </div>
        </div>
    </body>
</html>
