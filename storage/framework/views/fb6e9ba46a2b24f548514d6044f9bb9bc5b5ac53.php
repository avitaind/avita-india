<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.DOMUS_home'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/emergency-domus.css')); ?>"/>


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

<section class="product-liber-wifi ls-0" style="min-height:50px; height:500px;">
    <div class="banner-block">
        <div class="banner-bg">
        </div>
        <div class="container">

        <div class="banner-image">
            <img class="bc-computer-image bc-computer-1" src="/domus/img/example_bezier.png">
        
            <div class="banner-info-fly">
                <div class="ac-computer-wrap hidden-md-up">
                    <img class="ac-computer-image ac-computer-1" src="/domus/img/example_bezier.png">
                </div>
                <div class="h2 banner-header mb-4 mb-sm-5">What is Lorem Ipsum?</div>
                <div class="banner-para ls-0">
                    <span class="d-lg-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>

                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<section class="product-liber-wifi ls-0 " style="min-height:550px;">
    <div class="banner-block">
        <div class="banner-bg"></div>
        <div class="banner-image">
            <img class="bc-computer-image bc-computer-2" src="/domus/img/sc8_fimg2.jpg">
        </div>
        <div class="container">
            <div class="banner-info">
                <div class="ac-computer-wrap hidden-md-up">
                    <img class="ac-computer-image ac-computer-1" style="" src="/domus/img/sc8_fimg2.jpg">
                </div>
                <div class="h2 banner-header mb-4 mb-sm-5">Where does it come from?</div>
                <div class="banner-para ls-0">
                    <span class="d-lg-block">Plug and play from wherever your comfort and convenience demand. Sit at a couch, bed or desk AVITA Ubique OMA-100 glides with the same pace and accuracy in every situation. No lag up to the range of 8m. Smooth movements with high resolutions of 1000 dpi.</span>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-liber-port1 ls-0">
    <div class="banner-block">
        <div class="banner-bg"></div>
        <div class="banner-image">
            <img class="bc-computer-image bc-computer-4" src="/domus/img/sc8_fimg1.jpg">
        </div>
        <div class="container">
            <div class="banner-info mx-auto mr-lg-0">
                <div class="ac-computer-wrap hidden-md-up">
                    <img class="ac-computer-image ac-computer-4" src="/domus/img/sc8_fimg1.jpg">
                </div>
                <div class="h2 banner-header mb-4 mb-sm-5">Come-at-able</div>

                <div class="banner-para ls-0">
                    <span class="d-lg-block">Plug and play from wherever your comfort and convenience demand. Sit at a couch, bed or desk AVITA Ubique OMA-100 glides with the same pace and accuracy in every situation. No lag up to the range of 8m. Smooth movements with high resolutions of 1000 dpi. </span>

                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="product-liber-wifi ls-0" style="min-height:50px; height:600px;">
    <div class="banner-block">
   
        <div class="container">

        <div class="banner-image">
        
            <div class="banner-info-fly">
                <div class="ac-computer-wrap hidden-md-up">
                    <img class="ac-computer-image ac-computer-1" src="/domus/img/example_bezier.png">
                </div>
                <div class="h2 banner-header mb-4 mb-sm-5">What is Lorem Ipsum?</div>
                <div class="banner-para ls-0">
                    <span class="d-lg-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>

                </div>
            </div>
        </div>
        </div>
    </div>
</section>

   
</main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script type="text/javascript" src="<?php echo e(asset('js/emergency-domus.js')); ?>"></script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>