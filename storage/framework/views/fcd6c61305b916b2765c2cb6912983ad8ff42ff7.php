<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.Homepage'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main>


</main>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>