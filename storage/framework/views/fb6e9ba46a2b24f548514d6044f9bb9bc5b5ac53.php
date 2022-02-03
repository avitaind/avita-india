<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.DOMUS_home'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

 <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/product-liber.css')); ?>"/>
 <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/avita-domus.css')); ?>"/>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main>
<section class="product-liber-banner">
  <div class="responsive-block">
      <div class="banner-block responsive-item domus-banner">
          <div class="banner-bg hidden-sm-down" style="background-image: url('https://image.freepik.com/free-photo/interior-blank-photo-frame-living-room-with-white-sofa-3d-rendering_46483-504.jpg')"></div>
          <div class="banner-bg hidden-md-up" style="background-image: url('https://image.freepik.com/free-photo/interior-blank-photo-frame-living-room-with-white-sofa-3d-rendering_46483-504.jpg')"></div>
          <div class="banner-info"> 
              <div class="an-scroll-wrap">
                  <div class="an-scroll">
                      <span></span>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>


<section class="animation">
    <img class="paper-plane" id="my-sticky-element" src="/domus/img/example_bezier.png" alt="paper-plane">


</section>
</main>

<?php $__env->startSection('js'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/CSSPlugin.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/BezierPlugin.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js" ></script>
<script type="text/javascript" href="<?php echo e(asset('js/avita-domus.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>