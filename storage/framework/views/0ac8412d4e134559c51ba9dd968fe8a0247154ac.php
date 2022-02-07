<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->

<?php $__env->startSection('title'); ?>
<?php echo app('translator')->getFromJson('title.DOMUS_home'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-fluid align-items-center">


  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-text">
          <h1>Smart Wi-fi<br />LED Lighting</h1>
          <p>No Smart is Simple</p>
          <button class="btn btn-secondary">View More</button>
        </div>
        <img
          src="https://www.lighting.philips.co.in/content/dam/b2c/en_IN/marketing-catalog/lighting/homebase/smart-wifi-led-l.jpg"
          alt="Smart LED Slider 1" width="100%" height="auto">

      </div>

    </div>
    <div class="carousel-item">
      <div class="carousel-text">
        <h1>Smart Wi-fi<br />LED Lighting</h1>
        <p>No Smart is Simple</p>
        <button class="btn btn-secondary">View More</button>
      </div>
      <img src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/twinglow-l.jpg"
        alt="Smart LED Slider 2" width="100%" height="auto">
    </div>
    <div class="carousel-item">
      <div class="carousel-text">
        <h1>Smart Wi-fi<br />LED Lighting</h1>
        <p>No Smart is Simple</p>
        <button class="btn btn-secondary">View More</button>
      </div>

      <img
        src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/world-of-lighting-l.jpg"
        alt="Smart LED Slider 3" width="100%" height="auto">
    </div>
  </div>


  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

  </div>

</section><!-- End Hero -->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/js" href="<?php echo e(asset('js/product-domus.js')); ?>"></script> 

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/product-domus.css')); ?>" />
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>