<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Admisiones')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/background.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/navbar.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/Survey.css')); ?>" rel="stylesheet">
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
    </style>

    <script>// Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        // Steppers
        $(document).ready(function () {
            var navListItems = $('div.setup-panel-2 div a'),
                allWells = $('.setup-content-2'),
                allNextBtn = $('.nextBtn-2'),
                allPrevBtn = $('.prevBtn-2');

            allWells.hide();

            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-amber').addClass('btn-blue-grey');
                    $item.addClass('btn-amber');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allPrevBtn.click(function(){
                var curStep = $(this).closest(".setup-content-2"),
                    curStepBtn = curStep.attr("id"),
                    prevStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

                prevStepSteps.removeAttr('disabled').trigger('click');
            });

            allNextBtn.click(function(){
                var curStep = $(this).closest(".setup-content-2"),
                    curStepBtn = curStep.attr("id"),
                    nextStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for(var i=0; i< curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid)
                    nextStepSteps.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel-2 div a.btn-amber').trigger('click');
        });
    </script>
</head>
<body class="bg-dark">
<div id="app">
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name', 'Laravel')); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <!-- Left Side Of Navbar -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

        </ul>
    <!-- Right Side Of Navbar -->
        <!-- Collect the nav links, forms, and other content for toggling -->
            <ul id="nav" class="navbar-nav ml-auto">
                <?php if(auth()->guard()->guest()): ?>
                <li class="nav nav-link">
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
                <li><a href="<?php echo e(route('register')); ?>" class="nav-link">Registrate</a></li>
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
    <?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html>