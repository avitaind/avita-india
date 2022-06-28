<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.LED-Baton-DownLight'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="top-nav-padding">
        <?php echo $__env->make('partials.domusLBD-product-navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down"
                        style="background-image: url('/images/domus/website_domus_banner.png')"></div>
                    <div class="banner-bg hidden-md-up"
                        style="background-image: url('/images/domus/mobile_domus_banner.png')">
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="product-liber-computer ls-0" id="test" style="background-color:#eee;">

        </section>


        <div class="banner-block">
            <div class="container" style="width: ">
                <div align="center">

                    

                    <section class="product-liber-computer ls-0" style="background-color:##F0F0F0;">
                        <div class="container">
                            <div class="banner-info" style="max-width:100%;">
                                <div class="h2 banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">Smart
                                    Lighting made simple
                                    with DOMUS</div>
                                <div class="banner-para">
                                    <span>Welcome to the family of the smarts! AVITA DOMUS offers a wide range of
                                        smart light bulbs,
                                        battens and Smart LED downlight. Whether it’s for your living room, kitchen,
                                        bathroom, or backyard,
                                        AVITA DOMUS has the
                                        perfect light.</span>
                                </div>
                            </div>
                        </div>
                    </section>

                    

                    <section class="banner-anchor">
                        <div class="container">
                            <div class="row">
                                
                            </div>
                        </div>
                    </section>

                    

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item col-md-4 " align="center">
                            <a class="nav-link active text-center" id="LED-tab" data-toggle="tab" href="#LED"
                                role="tab" aria-controls="LED" aria-selected="true">SMART LED BULB</a>
                        </li>
                        <li class="nav-item col-md-4 " align="center">
                            <a class="nav-link" id="BATON-tab" data-toggle="tab" href="#BATON" role="tab"
                                aria-controls="BATON" aria-selected="false">SMART LED BATTEN (Launching Soon)</a>
                        </li>
                        <li class="nav-item col-md-4 " align="center">
                            <a class="nav-link" id="DOWN-tab" data-toggle="tab" href="#DOWN" role="tab"
                                aria-controls="DOWN" aria-selected="false">SMART LED DOWNLIGHT (Launching Soon)</a>
                        </li>
                    </ul>

                    <section class="tab-content" id="myTabContent">
                        
                        <?php echo $__env->make('product.domus.led_bulb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        
                        <?php echo $__env->make('product.domus.led_batten', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        
                        <?php echo $__env->make('product.domus.led_downlight', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </section>
                </div>
            </div>
        </div>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <style>
        span {
            text-align: justify;
            text-align-last: center;
        }

        @media (max-width: 575px) {
            .banner-para {
                text-align: justify !important;
                text-align-last: center;
            }

            .button {
                line-height: 1.15;
                cursor: pointer;
                margin-right: 10px;
                margin-left: 10px;
            }

            .btun {
                min-width: 100px !important;
                line-height: 1.15;
            }

        }

        .nav-tabs {
            border-bottom: 1px solid #ddd;
        }


        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            background: #662D91;
            color: #fff;
            border-color: #662D91 #662D91 #662D91;
        }

        .nav-tabs .nav-link.active {
            color: #fff;
            background-color: #662D91;
            border-color: #ddd #ddd #fff;
        }

        .btun {
            min-width: 160px;
            line-height: 1.15;
        }

        .btun:hover {
            background: #662D91;
            color: #fff;
            border-color: #662D91;
        }
    </style>
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/domus.css')); ?>" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script type="text/javascript" src="<?php echo e(asset('js/domus.js')); ?>"></script>
    <script>
        var Bulbstate = 0;

        function CH5() {
            switch (Bulbstate) {
                case 0:
                    document.getElementById('heading').innerHTML = "Wide spectrum of colors to set up moods"
                    document.getElementById('headingmob').innerHTML = "Wide spectrum of colors to set up moods"
                    document.getElementById('message')
                        .innerHTML =
                        "Make every moment mesmerizing with AVITA DOMUS smart batten. AVITA DOMUS smart batten creates a perfect ambiance for parties, festivals, or a movie night. Explore endless lighting possibilities with 16 million color options.";
                    document.getElementById('messagemob')
                        .innerHTML =
                        "Make every moment mesmerizing with AVITA DOMUS smart batten. AVITA DOMUS smart batten creates a perfect ambiance for parties, festivals, or a movie night. Explore endless lighting possibilities with 16 million color options.";
                    document.getElementById("myimage").src = "/images/domus/SPECTRUM-OF-COLORS-web.png";
                    document.getElementById("myimagemob").src = "/images/domus/SPECTRUM-OF-COLORS-MOB.png";
                    document.getElementById("iconweb").src = "/images/domus/BOX_OF_SPECTRUM_TO_BUILD_UP_SCENES_100px.png";
                    document.getElementById("iconmob").src = "/images/domus/BOX_OF_SPECTRUM_TO_BUILD_UP_SCENES_100px.png";
                    Bulbstate = 0;
                    break;
                default:
                    document.getElementById('heading').innerHTML = "Wide spectrum of colors to set up moods"
                    document.getElementById('headingmob').innerHTML = "Wide spectrum of colors to set up moods"
                    document.getElementById('message')
                        .innerHTML =
                        "Make every moment mesmerizing with AVITA DOMUS smart batten. AVITA DOMUS smart batten creates a perfect ambiance for parties, festivals, or a movie night. Explore endless lighting possibilities with 16 million color options.";
                    document.getElementById('messagemob')
                        .innerHTML =
                        "Make every moment mesmerizing with AVITA DOMUS smart batten. AVITA DOMUS smart batten creates a perfect ambiance for parties, festivals, or a movie night. Explore endless lighting possibilities with 16 million color options.";
                    document.getElementById("myimage").src = "/images/domus/SPECTRUM-OF-COLORS-WEB.png";
                    document.getElementById("myimagemob").src = "/images/domus/SPECTRUM-OF-COLORS-MOB.png";
                    document.getElementById("iconweb").src = "/images/domus/BOX_OF_SPECTRUM_TO_BUILD_UP_SCENES_100px.png";
                    document.getElementById("iconmob").src = "/images/domus/BOX_OF_SPECTRUM_TO_BUILD_UP_SCENES_100px.png";
                    Bulbstate = 0;
            }

        }

        function CH2() {
            switch (Bulbstate) {
                case 1:
                    document.getElementById('heading').innerHTML = "Explore the shades of white"
                    document.getElementById('headingmob').innerHTML = "Explore the shades of white"
                    document.getElementById('message')
                        .innerHTML =
                        "Give your space a touch of freshness with the shades of white. Relax in the ambiance, change the brightness and tune your light to any shade of white between warm white and cool day white.";
                    document.getElementById('messagemob')
                        .innerHTML =
                        "Give your space a touch of freshness with the shades of white. Relax in the ambiance, change the brightness and tune your light to any shade of white between warm white and cool day white.";
                    document.getElementById("myimage").src = "/images/domus/EXPLORE-THE-SHADES-OF-WHITE_2CH_web.png";
                    document.getElementById("myimagemob").src = "/images/domus/EXPLORE-THE-SHADES-OF-WHITE_2CH_mob.png";
                    document.getElementById("iconweb").src = "/images/domus/EXPLORE-THE-SHADES-OF-WHITE_2CH_web_100px.png";
                    document.getElementById("iconmob").src = "/images/domus/EXPLORE-THE-SHADES-OF-WHITE_2CH_mob_100px.png";
                    Bulbstate = 1;
                    break;
                default:
                    document.getElementById('heading').innerHTML = "Explore the shades of white"
                    document.getElementById('headingmob').innerHTML = "Explore the shades of white"
                    document.getElementById('message')
                        .innerHTML =
                        "Give your space a touch of freshness with the shades of white. Relax in the ambiance, change the brightness and tune your light to any shade of white between warm white and cool day white.";
                    document.getElementById('messagemob')
                        .innerHTML =
                        "Give your space a touch of freshness with the shades of white. Relax in the ambiance, change the brightness and tune your light to any shade of white between warm white and cool day white.";
                    document.getElementById("myimage").src = "/images/domus/EXPLORE-THE-SHADES-OF-WHITE_2CH_web.png";
                    document.getElementById("myimagemob").src = "/images/domus/EXPLORE-THE-SHADES-OF-WHITE_2CH_mob.png";
                    document.getElementById("iconweb").src = "/images/domus/EXPLORE-THE-SHADES-OF-WHITE_2CH_web_100px.png";
                    document.getElementById("iconmob").src = "/images/domus/EXPLORE-THE-SHADES-OF-WHITE_2CH_mob_100px.png";
                    Bulbstate = 1;
            }

        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>