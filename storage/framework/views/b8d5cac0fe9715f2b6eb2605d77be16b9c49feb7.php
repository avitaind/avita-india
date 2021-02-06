<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
       
 
  
    <div class="carousel-item active">
                <div class="responsive-block">
               <a href="<?php echo e(route('product.overview', ['liber-v'])); ?>">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-liber-v"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-liber-v"></div>
                    </div>
                    </a>
                </div>
            </div>
           
            <div class="carousel-item">
                <div class="responsive-block">
                <a href="<?php echo e(route('product.overview', ['essential'])); ?>">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-essential"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-essential"></div>
                    </div>
                    </a>
                </div>
        </div>


        <div class="carousel-item">
                <div class="responsive-block">
                 <a href="<?php echo e(route('product.overview', ['admiror'])); ?>">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-admiror"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-admiror"></div>
                    </div>
                </div>
            </div>
    <!---
            <div class="carousel-item">
                <div class="responsive-block">
                    <a href="<?php echo e(route('product.overview', ['pura'])); ?>">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-pura"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-pura"></div>
                    </div>
                    </a>
                </div>
            </div>

  
        <div class="carousel-item">
                <div class="responsive-block">
                   <a href="<?php echo e(route('product.overview', ['magus-lite-2in1-laptop'])); ?>">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-magus"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-magus"></div>
                    </div>
                    </a>
                </div>
            </div>
    ----->
      
            <div class="carousel-item">
                <div class="responsive-block">
                <a href="https://www.avita.com/in/login">

                    <div class="banner-block responsive-item">
                            <div class="banner-bg hidden-sm-down banner-web-warranty"></div>
                            <div class="banner-bg hidden-md-up banner-mob-warranty"></div>
                       </div>
                       </a>
                  </div>
            </div>
       
          <ol class="carousel-indicators">
           <li data-target="#home_banner" data-slide-to="0" class="active"></li>
           <li data-target="#home_banner" data-slide-to="1"></li>
           <li data-target="#home_banner" data-slide-to="2"></li>
           <li data-target="#home_banner" data-slide-to="3"></li>


        </ol>
    </div>
  </div>       

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
        $(document).ready(function() {
    $('.carousel').carousel({
      interval: 4000
    });
  });
  
    </script>
<?php $__env->stopSection(); ?>
