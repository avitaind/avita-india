<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-d1"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-d1"></div>
                    </div>
                
                </div>
            </div>

            
        <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-d2"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-d2"></div>
                    </div>
                
                </div>
            </div>

      <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-e"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-e"></div>
                    </div>
                
                </div>
            </div>

        <div class="carousel-item">
                <div class="responsive-block">
                <a href="<?php echo e(route('product.overview', ['liber-v'])); ?>">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-1"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-1"></div>
                    </div>
                     </a>
                </div>
            </div>

        <div class="carousel-item">
                <div class="responsive-block">
                <a href="https://bit.ly/3lwkCyN">
                    <div class="banner-block responsive-item">
                   
                        <div class="banner-bg hidden-sm-down banner-web-2"></div>
                    
                        <div class="banner-bg hidden-md-up banner-mob-2"></div>
                    </div>
                     </a>
                </div>
            </div>
            
                     
            <div class="carousel-item">
            <div class="responsive-block">
                    <a href="<?php echo e(route('product.overview', ['pura'])); ?>">

                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-3"></div>
                        <div class="banner-bg hidden-md-up banner-mob-3"></div>
                    </div>
                    </a>
                </div>
            </div>
          
             <div class="carousel-item">
                <div class="responsive-block">
                <a href="<?php echo e(route('product.overview', ['admiror'])); ?>">
                    <div class="banner-block responsive-item">
                     
                            <div class="banner-bg hidden-sm-down banner-web-4"></div>
                       
                            <div class="banner-bg hidden-md-up banner-mob-4"></div>
                    </div>
                     </a>
                </div>
            </div>

         <div class="carousel-item">
                <div class="responsive-block">
                    <a href="<?php echo e(route('product.overview', ['liber-new-generation'])); ?>">
                        <div class="banner-block responsive-item">
                         
                                <div class="banner-bg hidden-sm-down banner-web-5"></div>
                       
                            <div class="banner-bg hidden-md-up banner-mob-5"></div>
                        </div>
                    </a>
                </div>
            </div>

    
            <div class="carousel-item">
                <div class="responsive-block">
                    <a href="<?php echo e(route('product.overview', ['liber-new-generation'])); ?>">
                        <div class="banner-block responsive-item">
                       
                              <div class="banner-bg hidden-sm-down banner-web-6"></div>
                         
                              <div class="banner-bg hidden-md-up banner-mob-6"></div>
                        </div>
                    </a>
                </div>
            </div>
         
            <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                          
                            <div class="banner-bg hidden-sm-down banner-web-7"></div>
                                                 
                            <div class="banner-bg hidden-md-up banner-mob-7"></div>
                       </div>
                  </div>
            </div>
       
          <ol class="carousel-indicators">
           <li data-target="#home_banner" data-slide-to="0" class="active"></li>
           <li data-target="#home_banner" data-slide-to="1"></li>
           <li data-target="#home_banner" data-slide-to="2"></li>
           <li data-target="#home_banner" data-slide-to="3"></li>
           <li data-target="#home_banner" data-slide-to="4"></li>
           <li data-target="#home_banner" data-slide-to="5"></li>
           <li data-target="#home_banner" data-slide-to="6"></li>
           <li data-target="#home_banner" data-slide-to="7"></li>

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
