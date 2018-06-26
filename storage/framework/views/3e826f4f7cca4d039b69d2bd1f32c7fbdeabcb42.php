<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Admisiones')); ?></title>

    <!-- Scripts -->
    <?php if(Request::url() != route('cuestionario') && Request::url() != route('familiar')): ?>
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <?php endif; ?>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/background.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/navbar.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/Survey.css')); ?>" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>

    <link href="<?php echo e(asset('css/intlTelInput.css')); ?>" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <style>
        .iti-flag {background-image: url("<?php echo e(asset('img/flags.png')); ?>");}

        @media  only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
            .iti-flag {background-image: url("<?php echo e(asset('img/flags@2x.png')); ?>");}
        }
    </style>

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

        fieldset {
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
            border: 2px solid rgba(0, 0, 0, 0.3);
        }

        .form-inline > * {
            margin:5px 5px;
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

        .fileUpload {
            position: relative;
            overflow: hidden;
            margin: 10px;
        }
        .fileUpload input.upload {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .archiveLabel {
            border-radius: 25px;
            border-style: solid;
            border-width: 5px;
        }

        .archive {
            border-radius: 25px;
            border-style: solid;
            border-width: 0px;
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
            width: 100%;
            font-family: Roboto;
            font-size: 20px;
            color: #ffffff;
            text-shadow: 0 2px 4px rgba(0,0,0,0.50);
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

        .intl-tel-input {width: 100%;}

        @import  "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a, a:hover, a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .navbarAD {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 0px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btnAD {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        /* ---------------------------------------------------
            SIDEBAR STYLE
        ----------------------------------------------------- */

        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
            perspective: 1500px;
        }


        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #fd8023;
            color: #fff;
            transition: all 0.6s cubic-bezier(0.945, 0.020, 0.270, 0.665);
            transform-origin: bottom left;
        }

        #sidebar.active {
            margin-left: -250px;
            transform: rotateY(100deg);
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #fd7c18;
        }

        #sidebar .sidebar-header:hover {
            color: #000000;
            background: #ffffff;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #613b25;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }
        #sidebar ul li a:hover {
            color: #613b25;
            background: #fff;
        }

        #sidebar ul li.active > a {
            color: #fff;
            background: #fd7203;
        }


        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggleJC::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #fd9137;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.download {
            background: #fff;
            color: #7386D5;
        }

        a.article, a.article:hover {
            background: #6d7fcc !important;
            color: #fff !important;
        }



        /* ---------------------------------------------------
            CONTENT STYLE
        ----------------------------------------------------- */
        #content {
            width: 100%;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
        }

        #sidebarCollapse {
            width: 40px;
            height: 40px;
            background: #f5f5f5;
            cursor: pointer;
            border-radius: 5px;
        }

        #sidebarCollapse span {
            width: 80%;
            height: 2px;
            margin: 0 auto;
            display: block;
            background: #555;
            transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
            transition-delay: 0.2s;
        }

        #sidebarCollapse span:first-of-type {
            transform: rotate(45deg) translate(2px, 2px);
        }
        #sidebarCollapse span:nth-of-type(2) {
            opacity: 0;
        }
        #sidebarCollapse span:last-of-type {
            transform: rotate(-45deg) translate(1px, -1px);
        }


        #sidebarCollapse.active span {
            transform: none;
            opacity: 1;
            margin: 5px auto;
        }


        /* ---------------------------------------------------
            MEDIAQUERIES
        ----------------------------------------------------- */
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
                transform: rotateY(90deg);
            }
            #sidebar.active {
                margin-left: 0;
                transform: none;
            }
            #sidebarCollapse span:first-of-type,
            #sidebarCollapse span:nth-of-type(2),
            #sidebarCollapse span:last-of-type {
                transform: none;
                opacity: 1;
                margin: 5px auto;
            }
            #sidebarCollapse.active span {
                margin: 0 auto;
            }
            #sidebarCollapse.active span:first-of-type {
                transform: rotate(45deg) translate(2px, 2px);
            }
            #sidebarCollapse.active span:nth-of-type(2) {
                opacity: 0;
            }
            #sidebarCollapse.active span:last-of-type {
                transform: rotate(-45deg) translate(1px, -1px);
            }

        }

    </style>

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

            var state = parseInt("<?php echo e($state); ?>");

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
<?php if(Request::url() == route('home')): ?>
    <body style="background-color: #ffffff; background-image: url('<?php echo e(asset('img/foto_anahuac.jpg')); ?>')">
<?php else: ?>
    <body style="background-color: #ffffff;">
<?php endif; ?>

<div id="app" style="padding-bottom: 0px">
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <ul class="navbar-nav mr-auto">
        <img src="<?php echo e(URL::asset("img/anahuac.jpg")); ?>" width="150" height="50">
    </ul>
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name', 'Laravel')); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <!-- Left Side Of Navbar -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <!-- Right Side Of Navbar -->
        <!-- Collect the nav links, forms, and other content for toggling -->
            <ul id="nav" class="navbar-nav ml-auto">
                <?php if(auth()->guard()->guest()): ?>
                    <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Iniciar sesión')); ?></a></li>
                    <li><a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registrate')); ?></a></li>
                    <!-- <li class="nav nav-link">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><?php echo e(__('Iniciar sesión')); ?></b> <span class="caret"></span></a>
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
                                    <form class="form" role="form" method="POST" action="<?php echo e(route('login')); ?>" accept-charset="UTF-8" id="login-nav">
                                        <?php echo csrf_field(); ?>

                                        <div class="form-group">
                                            <label class="email" for="exampleInputEmail2"><h4><?php echo e(__('Correo electrónico:')); ?></h4></label>
                                            <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="Correo electrónico" required autofocus>
                                                <?php if($errors->has('email')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="password" for="exampleInputPassword2"><h4><?php echo e(__('Contraseña:')); ?></h4></label>
                                            <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" placeholder="Contraseña"  required>
                                                <?php if($errors->has('password')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> keep me logged-in
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
                <li><a href="<?php echo e(route('register')); ?>" class="nav-link">Registrate</a></li>-->
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <a href="<?php echo e(route('home')); ?>">
                <div class="sidebar-header">
                    <h3>Menu</h3>
                </div>
            </a>

            <ul class="list-unstyled components">
                <li>
                    <a id="basico" href="<?php echo e(route('cuestionario')); ?>">Información Basica</a>
                </li>
                <li>
                    <a id="pago" href="<?php echo e(route('payment')); ?>">Pago</a>
                </li>
                <li>
                    <a id="subirArchivos" href="<?php echo e(route('uploadFiles')); ?>">Archivos</a>
                </li>
                <li>
                    <a id="familia" href="<?php echo e(route('familiar')); ?>">Familia</a>
                </li>
                <li>
                    <a id="ov" href="<?php echo e(route('orientacionVocacional')); ?>">Orientación Vocacional</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">

            </ul>
        </nav>

        <button type="button" id="sidebarCollapse" class="navbar-btnAD">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>

        <!-- Page Content Holder -->
        <div id="content">

            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</div>
</body>
</html>