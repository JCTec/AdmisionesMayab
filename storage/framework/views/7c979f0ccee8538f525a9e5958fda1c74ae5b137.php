<?php $__env->startSection('content'); ?>

        <?php echo Form::open(array('url' => '/addFile/1','files'=>'true')); ?>

        <?php echo Form::file('file'); ?>

        <?php echo Form::text('type', 'Acta de Nacimiento'); ?>

        <?php echo Form::token(); ?>

        <?php echo Form::submit('Upload File'); ?>

        <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.napp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>