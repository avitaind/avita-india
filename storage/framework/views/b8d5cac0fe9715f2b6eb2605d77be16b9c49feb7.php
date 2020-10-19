<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">


        <div class="carousel-item active">
                <div class="responsive-block">
                <a href="<?php echo e(route('product.overview', ['liber-v-gold'])); ?>">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-gold"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-gold"></div>
                    </div>
                    </a>
                </div>
            </div>


        <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-f1"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-f1"></div>
                    </div>
                
                </div>
            </div>

            
        <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-f2"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-f2"></div>
                    </div>
                
                </div>
            </div>

      <div class="carousel-item">
                <div class="responsive-block">
                <a href="https://in.nexstmall.com/">

                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-nexstmall"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-nexstmall"></div>
                    </div>
                    </a>
                </div>
            </div>

      
            <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                          
                            <div class="banner-bg hidden-sm-down banner-web-warranty"></div>
                                                 
                            <div class="banner-bg hidden-md-up banner-mob-warranty"></div>
                       </div>
                  </div>
            </div>
       
          <ol class="carousel-indicators">
           <li data-target="#home_banner" data-slide-to="0" class="active"></li>
           <li data-target="#home_banner" data-slide-to="1"></li>
           <li data-target="#home_banner" data-slide-to="2"></li>
           <li data-target="#home_banner" data-slide-to="3"></li>
           <li data-target="#home_banner" data-slide-to="4"></li>
       

        </ol>
    </div>
  </div>       

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
        $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });
  
    </script>
<?php $__env->stopSection(); ?>
