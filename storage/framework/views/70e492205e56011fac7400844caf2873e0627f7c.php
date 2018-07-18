<?php $__env->startSection('content'); ?>
    <main>
        <script>
            function showProfile(id) {
                $('#userID').val(parseInt(id));

                $('#perfil').submit();
            }
        </script>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Fecha de Creación</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Estatus</th>
                <?php if($role->u): ?>
                    <th>Acciones</th>
                <?php endif; ?>
            </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <?php if($role->u): ?>
                            <td><a href="#"><img src="<?php echo e(asset('img/ppPlaceHolder.png')); ?>" class="avatar" alt="Avatar" width="40px" height="40px"> <?php echo e($user->alumno->firstName); ?> <?php echo e($user->alumno->secondName); ?></a></td>
                            <td><?php echo e($user->alumno->created_at); ?></td>
                            <td><?php echo e($user->alumno->finalEmail); ?></td>
                            <td><?php echo e($user->alumno->telefonoInt); ?> <?php echo e($user->alumno->telefono); ?></td>

                            <td>
                                <?php if($user->transaction): ?>
                                    <span class="status text-success">&bull;</span>
                                    Pagado
                                <?php else: ?>
                                    <span class="status text-danger">&bull;</span>
                                    Sin Pagar
                                <?php endif; ?>
                            </td>

                            <td>
                                <a onclick="showProfile('<?php echo e($user->id); ?>')" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                            </td>
                        <?php else: ?>
                            <td><?php echo e($user->alumno->firstName); ?> <?php echo e($user->alumno->secondName); ?></td>
                            <td><?php echo e($user->alumno->created_at); ?></td>
                            <td><?php echo e($user->alumno->finalEmail); ?></td>
                            <td><?php echo e($user->alumno->telefonoInt); ?> <?php echo e($user->alumno->telefono); ?></td>
                            <td>
                                <?php if($user->transaction): ?>
                                    <span class="status text-success">&bull;</span>
                                    Pagado
                                <?php else: ?>
                                    <span class="status text-danger">&bull;</span>
                                    Sin Pagar
                                <?php endif; ?>
                            </td>
                        <?php endif; ?>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>

        <form role="form" method="POST" action="<?php echo e(route('perfil')); ?>" accept-charset="UTF-8" id="perfil">
            <?php echo csrf_field(); ?>

            <input id="userID" name="userID" type="hidden" value="">
        </form>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>