<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.Homepage'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main>
<iframe src="https://avita.com/hk/support" style="width:100%; height:2000px;" frameborder="0" scrolling="no" ></iframe>


</main>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>