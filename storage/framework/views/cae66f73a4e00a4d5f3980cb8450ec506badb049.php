<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.DOMUS_home'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,100|Roboto+Condensed:700" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('domus/css/styles.css')); ?>">

    <script src="<?php echo e(asset('domus/js/modernizr-2.8.3-respond-1.4.2.min.js ')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <body class="is-loading">

        <div id="preloader">
            <div class="txt">
                <p class="txt-perc">0%</p>
                <div class="progress"><span></span></div>
            </div>
        </div>

        <div id="intro" class="header-container fs">
            <div class="bcg"></div>
            
            <span class="scroll-hint">Scroll Down</span>
        </div>


        <div id="main" class="main-container">

            <article id="cb01" class="content-block">
                <div class="wrapper">
                    <header class="slideInUp">
                        <h1>Lorem Ipsum</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">What is Lorem Ipsum?</p>
                    </section>
                </div> <!-- .wrapper -->
            </article>

            <article id="slide01" class="slide fs">
                <div class="bcg"></div>
                <div class="wrapper">
                    <header class="slideInUp">
                        <h1>Lorem Ipsum</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.</p>
                    </section>
                </div> <!-- .wrapper -->
            </article>

            <article id="cb02" class="content-block">
                <div class="wrapper">
                    <header class="slideInUp">
                        <h1>Lorem Ipsum</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">Lorem Ipsum has been the industry's standard dummy text ever since
                            the 1500s.</p>
                    </section>
                </div> <!-- .wrapper -->
            </article>

            <article id="slide02" class="slide fs">
                <div class="bcg"></div>
                <div class="wrapper">
                    <header class="slideInUp">
                        <h1>Lorem Ipsum</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">Climbing is hard to give up, it's just as hard to give up as
                            cigarettes.</p>
                    </section>
                </div> <!-- .wrapper -->
            </article>

            <article id="cb03" class="content-block">
                <div class="wrapper">
                    <header class="slideInUp">
                        <h1>Lorem Ipsum</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">Contrary to popular belief, Lorem Ipsum is not simply random text.
                        </p>
                    </section>
                </div> <!-- .wrapper -->
            </article>

            <article id="slide03" class="slide fs">
                <div class="bcg"></div>
                <div class="wrapper" style="color:white">
                    <header class="slideInUp">
                        <a href="https://ihatetomatoes.net/blog/" title="Petr Tichy's Front End Development Blog">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                id="iht_logo" x="0" y="0" viewBox="0 0 308.8 152.1" xml:space="preserve"
                                enable-background="new 0 0 308.8 152.1" style="visibility: inherit; opacity: 1;">
                                <style>
                                    .s0 {
                                        fill: #D74022;
                                    }

                                    .s1 {
                                        fill: #4D4D4F;
                                    }

                                    .s2 {
                                        fill: none;
                                        stroke-linecap: round;
                                        stroke-miterlimit: 10;
                                        stroke-width: 10;
                                        stroke: #FFF;
                                    }

                                </style>
                                <path
                                    d="M139.7 17.2C106 18.3 78.6 45.7 77.5 79.4 76.9 98 84.2 114.9 96.3 127l91-91C175.2 23.9 158.3 16.6 139.7 17.2z"
                                    fill="#D74022"></path>
                                <path
                                    d="M122.3 127c12.1 12.1 29 19.4 47.6 18.8 33.7-1.1 61.1-28.5 62.2-62.2 0.6-18.6-6.7-35.5-18.8-47.6L122.3 127z"
                                    fill="#D74022"></path>
                                <polygon points="238.3 152.1 225.6 139.3 283.4 81.5 225.6 23.8 238.3 11 308.8 81.5 "
                                    fill="#4D4D4F"></polygon>
                                <polygon points="70.5 152.1 0 81.5 70.5 11 83.2 23.8 25.5 81.5 83.2 139.3 " fill="#4D4D4F">
                                </polygon>
                                <path d="M144.5 30.6" class="s2"></path>
                                <path d="M132.6 30.4" class="s2"></path>
                                <path
                                    d="M128.6 10.9c0-1.5 0-3 0.1-4.5 0.1-1.4 0.8-3.1 0.3-4.5 -0.8-2.5-4.3-2.6-5.5-0.3 -1.8 4.5-2.5 9.2-2.4 14 -6.7 3.2-17 2-24-0.2 5.1 4 11.2 6.7 18 7.5 -6.5 3-12.5 7-17.6 11.9 13.7-9.2 32.4-7.6 44.4 3.7 -1.3-4.6-3.5-8.7-6.4-12.3 7.3-5.2 16.3-7.4 25.1-6.3 -7-2.1-14.2-3-21.5-2.8 3.2-2.1 6-4.7 8.3-7.7 -6.3 3.5-11.4 4.1-18.5 4.4C128.8 13.2 128.7 11.6 128.6 10.9"
                                    fill="#95D600"></path>
                            </svg>
                        </a>
                        <h1>Do you want to learn Lorem Ipsum?</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit.</p>
                        <div class="slideInUp slideInUp3">
                            <a href="https://ihatetomatoes.net/5-days-with-scrollmagic/"
                                class="button download-app">DOWNLOAD NOW</a>
                        </div>

                    </section>
                </div> <!-- .wrapper -->
            </article>

        </div> <!-- #main-container -->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="/domus/js/jquery-1.11.2.min.js"><\/script>')
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/TextPlugin.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/ScrollToPlugin.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js"></script>

        <script src="/domus/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                    function() {
                        (b[l].q = b[l].q || []).push(arguments)
                    });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>