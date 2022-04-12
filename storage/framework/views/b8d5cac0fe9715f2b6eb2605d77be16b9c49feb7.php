<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <div class="responsive-block">
                    <a href="<?php echo e(route('product.overview', ['ultimus'])); ?>">

                        <div class="banner-block responsive-item">
                            <div class="banner-bg hidden-sm-down banner-web-Ultimus"></div>
                            <div class="banner-bg hidden-md-up banner-mob-Ultimus"></div>
                        </div>
                    </a>
                </div>
            </div>

            

            <div class="carousel-item ">
                <div class="responsive-block">

                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-domus"></div>
                        <div class="banner-bg hidden-md-up banner-mob-domus"></div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="responsive-block">
                    <a href="/product/pura">

                        <div class="banner-block responsive-item">
                            <div class="banner-bg hidden-sm-down banner-web-PURA-E"></div>
                            <div class="banner-bg hidden-md-up banner-mob-PURA-E"></div>
                        </div>
                    </a>
                </div>
            </div>

            

            

            

            <div class="carousel-item  ">
                <div class="responsive-block">
                    <a href="<?php echo e(route('windows-11')); ?>">

                        <div class="banner-block responsive-item">
                            <div class="banner-bg hidden-sm-down banner-web-windows-11"></div>
                            <div class="banner-bg hidden-md-up banner-mob-windows-11"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="carousel-item ">
                <div class="responsive-block">
                    <a href="/accessories/sleeve" target="_blank">

                        <div class="banner-block responsive-item">
                            <div class="banner-bg hidden-sm-down banner-web-Sleeve-Bag"></div>
                            <div class="banner-bg hidden-md-up banner-mob-Sleeve-Bag"></div>
                        </div>
                    </a>
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
            });
        });
    </script>
<?php $__env->stopSection(); ?>
