<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    Bienvenido <?php echo e(Auth::user()->name); ?> al sistema de admisiones de la Universidad Anáhuac
                        <br>
                    <form class="form" role="form" method="POST" action="<?php echo e(route('login')); ?>" accept-charset="UTF-8" id="login-nav">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="formLabel ">Primer nombre:</label>
                                <input class="form-control" type="text" required>
                                <label class="formLabel">Primer apellido:</label>
                                <input class="form-control" type="text" required>
                                <label class="formLabel">Correo electrónico:</label>
                                <input class="form-control" type="email" required>
                                <label class="formLabel">Fecha de nacimiento:</label>
                                <form class="form-inline">
                                <label class="sr-only" for="inlineFormInput">Dia</label>
                                <input id="inlineFormInput" class="form-control" type="text" required>
                                <label class="sr-only" for="inlineFormInput">Mes</label>
                                <input  class="form-control" type="text" required>
                                <label class="sr-only" for="inlineFormInput">Año</label>
                                <input class="form-control" type="text" required>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <label class="formLabel">Segundo nombre:</label>
                                <input class="form-control" type="text">
                                <label class="formLabel">Segundo apellido:</label>
                                <input class="form-control" type="text">
                                <label class="formLabel">Confirma tu correo electrónico:</label>
                                <input class="form-control" type="email" required>
                                <label class="formLabel">Sexo:</label>
                                <select class="form-control" required>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>HELICOPTERO DE COMBATE TIPO APACHE</option>
                                </select>
                                <label class="formLabel">Segundo apellido:</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="col-md-6">
                                <label class="formLabel">Segundo nombre:</label>
                                <input class="form-control" type="text">
                                <label class="formLabel">Segundo apellido:</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.napp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>