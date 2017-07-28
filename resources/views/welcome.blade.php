<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
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
            @if (Route::has('login'))
                <div class="top-right links">

                    @if (Auth::check())
                        Hello, {{ Auth::user()->name }}!
                        {{--,{{ Auth::user()->id }}--}}
                        <?php $isAdminName = Auth::user()->name == 'admin' ?>

                        @if($isAdminName)
                            <a href="{{ url('/adminpanel') }}">Admin panel</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        @else
                            <a href="{{ url('/home') }}">My cabinet</a>

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endif

                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                <div class="row">
                <div class="title m-b-md">
                <div class="title m-b-md">

                    Hello, make choise to visit

                </div>

                <div class="links">
                    <a href="index.php/resume">CV</a>
                    <a href="http://gitlab.intita.com/b16/Project2119/tree/issue__2124/">Project folder</a>
                    <a href="https://www.facebook.com/profile.php?id=100003144621147">Facebook</a>
                    <a href="https://www.linkedin.com/in/mykola-omelianov-19bba9130/">LinkedIn</a>
                    <a href="https://github.com/MykolaOm">GitHub</a>
                </div>
            </div>
        </div>
        </div>
        </div>
    </body>
</html>
