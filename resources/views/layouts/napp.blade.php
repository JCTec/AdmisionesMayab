<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admisiones') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/background.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Survey.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>

    <style>
        html {
            height: 100%;
        }
        html, body {
            min-height: 100%;
        }
        html, main {
            min-height: 100%;
        }

         #menuJC ul {
             list-style-type: none;
             padding: 0;
             margin: 0;
             text-align: center;
         }
        #menuJC li {
            display: inline-block;
            padding: 50px 30px;
        }

        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #ccc;
            margin: 1em 0;
            padding: 0;
        }

        .box {
            width: 900px;
            border: 2px solid #4c2f1e;
            padding: 25px;
            margin: 25px;
            background-color: #613b25;
            border-radius: 25px;
            font-family: Roboto;
            color: #ffffff;
        }

        #menuJC a {
            display: block;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px #4c2f1e solid;
            text-decoration: none;
            font-size: 1vw;
            text-align: center;
            padding-top: 10px;
            line-height:  5vw;
            margin: 5%;
            color: #ffffff;
            background-color: #613b25;
            font-family: "Roboto Condensed";
            font-size: 20px;
        }

        .formLabel {
            font-family: "Roboto Slab";
        }

        p.divider {
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        p.divider * {
            flex-shrink: 0
        }
        p.divider span.divider {
            width: 100%;
            flex-shrink: 1;
            border-bottom: 1px solid black;
            margin: 5px
        }

        * {margin: 0; padding: 0;}
        #container {height: 100%; width:100%; font-size: 0;}
        #left, #middle, #right {display: inline-block; *display: inline; zoom: 1; vertical-align: top; font-size: 12px;}
        #left {width: 25%; }
        #middle {width: 50%; }
        #right {width: 25%; }

    </style>

    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });
    </script>
    <script type="text/javascript">
        function toggle_visibility(id) {
            var e = document.getElementById(id);
            if(e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
        }
    </script>
</head>
<body style="background-color: #fd8023">
<div id="app" style="padding-bottom: 40px">
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <ul class="navbar-nav mr-auto">
        <img src="{{ URL::asset("img/anahuac.jpg") }}" width="150" height="50">
    </ul>
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <!-- Left Side Of Navbar -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <!-- Right Side Of Navbar -->
        <!-- Collect the nav links, forms, and other content for toggling -->
            <ul id="nav" class="navbar-nav ml-auto">
                @guest
                <li class="nav nav-link">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>{{__('Iniciar sesión')}}</b> <span class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    Login via
                                    <div class="social-buttons">
                                        <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                        <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                    </div>
                                    or
                                    <form class="form" role="form" method="POST" action="{{ route('login') }}" accept-charset="UTF-8" id="login-nav">
                                        @csrf

                                        <div class="form-group">
                                            <label class="email" for="exampleInputEmail2"><h4>{{__('Correo electrónico:')}}</h4></label>
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="password" for="exampleInputPassword2"><h4>{{__('Contraseña:')}}</h4></label>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña"  required>
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> keep me logged-in
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="bottom text-center">
                                    New here ? <a href="#"><b>Join Us</b></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('register') }}" class="nav-link">Registrate</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
    @yield('content')
</div>
</body>
</html>