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
    @if(false)
        <script src="{{ asset('js/app.js') }}" defer></script>
    @endif


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

    <link href="{{ asset('css/intlTelInput.css') }}" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <style>
        .iti-flag {background-image: url("{{asset('img/flags.png')}}");}

        @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
            .iti-flag {background-image: url("{{asset('img/flags@2x.png')}}");}
        }
    </style>

    <link href="{{ asset('css/Admisiones.css') }}" rel="stylesheet">


    <script type="text/javascript">
        function toggle_visibility(id) {
            var e = document.getElementById(id);
            if(e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
        }

        $(document).ready(function () {

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });

            var state = parseInt("{{$state}}");

            if(state == 1){

                $('#pago').on('click', function (e) {
                    e.preventDefault();
                });

                $('#subirArchivos').on('click', function (e) {
                    e.preventDefault();
                });

                $('#familia').on('click', function (e) {
                    e.preventDefault();
                });

                $('#ov').on('click', function (e) {
                    e.preventDefault();
                });

                $('#pago').css('background-color','#806255');

                $('#subirArchivos').css('background-color','#806255');

                $('#familia').css('background-color','#806255');

                $('#ov').css('background-color','#806255');

                $('#pago').css('color','#d7d7d6');

                $('#subirArchivos').css('color','#d7d7d6');

                $('#familia').css('color','#d7d7d6');

                $('#ov').css('color','#d7d7d6');

                $('#pago').css('cursor','default');

                $('#subirArchivos').css('cursor','default');

                $('#familia').css('cursor','default');

                $('#ov').css('cursor','default');


            }else if (state == 2){


                $('#subirArchivos').on('click', function (e) {
                    e.preventDefault();
                });

                $('#familia').on('click', function (e) {
                    e.preventDefault();
                });

                $('#ov').on('click', function (e) {
                    e.preventDefault();
                });



                $('#subirArchivos').css('background-color','#806255');

                $('#familia').css('background-color','#806255');

                $('#ov').css('background-color','#806255');


                $('#subirArchivos').css('color','#d7d7d6');

                $('#familia').css('color','#d7d7d6');

                $('#ov').css('color','#d7d7d6');


                $('#subirArchivos').css('cursor','default');

                $('#familia').css('cursor','default');

                $('#ov').css('cursor','default');

            }else if(state == 3){

                $('#familia').on('click', function (e) {
                    e.preventDefault();
                });

                $('#ov').on('click', function (e) {
                    e.preventDefault();
                });


                $('#familia').css('background-color','#806255');

                $('#ov').css('background-color','#806255');


                $('#familia').css('color','#d7d7d6');

                $('#ov').css('color','#d7d7d6');


                $('#familia').css('cursor','default');

                $('#ov').css('cursor','default');

            }else if (state == 4){

                $('#ov').on('click', function (e) {
                    e.preventDefault();
                });


                $('#ov').css('background-color','#806255');


                $('#ov').css('color','#d7d7d6');


                $('#ov').css('cursor','default');

            }else{

            }
        });
    </script>

</head>
@if(Request::url() == route('home'))
    <body style="background-color: #ffffff; background-image: url('{{ asset('img/foto_anahuac.jpg') }}')">
@else
    <body style="background-color: #ffffff;">
@endif

<div id="app" style="padding-bottom: 0px">
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <ul class="navbar-nav mr-auto">
        <img src="{{ URL::asset("img/anahuac.jpg") }}" width="150" height="50">
    </ul>
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Admisiones') }}</a>

        <!-- Left Side Of Navbar -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <!-- Right Side Of Navbar -->
        <!-- Collect the nav links, forms, and other content for toggling -->
            <ul id="nav" class="navbar-nav ml-auto">
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a></li>
                    <!-- <li class="nav nav-link">
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
                <li><a href="{{ route('register') }}" class="nav-link">Registrate</a></li>-->
                @else
                    <div >{{ Auth::user()->name }}</div>
                @endguest
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
@if(Request::url() != route('login') && Request::url() != route('register') && Request::url() != route('logout'))

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <a href="{{ route('home') }}">
                <div class="sidebar-header">
                    <h3>Menu</h3>
                </div>
            </a>

            <ul class="list-unstyled components">
                <li>
                    <a id="basico" href="{{ route('cuestionario') }}">Información Basica</a>
                </li>
                <li>
                    <a id="pago" href="{{ route('payment') }}">Pago</a>
                </li>
                <li>
                    <a id="subirArchivos" href="{{ route('uploadFiles') }}">Archivos</a>
                </li>
                <li>
                    <a id="familia" href="{{ route('familiar') }}">Familia</a>
                </li>
                <li>
                    <a id="ov" href="{{ route('orientacionVocacional') }}">Orientación Vocacional</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <div style="text-align: center">{{ Auth::user()->name }}</div>

                    <a class="download" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>

        <button type="button" id="sidebarCollapse" class="navbar-btnAD">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <script>
            $('#sidebar').toggleClass('active');
            $('#sidebarCollapse').toggleClass('active');
        </script>

        <!-- Page Content Holder -->
        <div id="content">
            @yield('content')
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    @else
        @yield('content')
    @endif

</div>
</body>
</html>