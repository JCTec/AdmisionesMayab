<?php $__env->startSection('content'); ?>
    <main>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Date Created</th>
                <th>Email</th>
                <th>Teléfono</th>
                <?php if($u): ?>
                    <th>Action</th>
                <?php endif; ?>
            </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <?php if($u): ?>
                            <td><a href="#"><img src="<?php echo e(asset('img/ppPlaceHolder.png')); ?>" class="avatar" alt="Avatar" width="40px" height="40px"> <?php echo e($alumno->firstName); ?> <?php echo e($alumno->secondName); ?></a></td>
                            <td><?php echo e($alumno->created_at); ?></td>
                            <td><?php echo e($alumno->finalEmail); ?></td>
                            <td><?php echo e($alumno->telefonoInt); ?> <?php echo e($alumno->telefono); ?></td>

                            <td>
                                <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                            </td>
                        <?php else: ?>
                            <td><?php echo e($alumno->firstName); ?> <?php echo e($alumno->secondName); ?></td>
                            <td><?php echo e($alumno->created_at); ?></td>
                            <td><?php echo e($alumno->finalEmail); ?></td>
                            <td><?php echo e($alumno->telefonoInt); ?> <?php echo e($alumno->telefono); ?></td>
                        <?php endif; ?>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>