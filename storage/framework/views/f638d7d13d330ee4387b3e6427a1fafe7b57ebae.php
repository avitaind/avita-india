 

 <?php $__env->startSection('title'); ?>
        <?php echo app('translator')->getFromJson('title.blog6'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <section class="event-detail top-nav-padding">
            <div class="container mb-5">
                <br/>
               <div class="event-banner">
                        <img src="/images/blog/blog6.jpg" class="img-responsive" />
                    </div>
                <div class="event-desc-block pb-5">
                <h5 class="text-center mt-4 mb-3 font-weight-light"><?php echo app('translator')->getFromJson('site.blog6'); ?></h5>
                <p><span lang="EN-US">Looking for a device that provides the productivity of a laptop and portability of a tablet? AVITA Magus 2-in-1 laptop is made just for you! Here are the Top 8 Reasons why you should buy a 2-in-1 laptop device:</span></p>
                <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>1. Extremely Light-weight and Durable</strong></h6> 
                <p><span lang="EN-US">One of the most amazing features of a 2-in-1 laptop is their ability to cut down on weight. Yes, it’s time your head and shoulders start thanking you for your choice of device! Why? The days of big, bulky laptops have gone as today we have one of the lightest and thin processors like the Intel Core M Processor. Not just that, these 2-in-1 laptops are surprisingly sturdy and can undergo the heavy wear and tear without suffering a scratch.</span></p>
                <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>2. Exquisite Functionality</strong></h6> 
                <p><span lang="EN-US">Nothing can beat a 2-in-1 laptop when it comes to functionality. Be it typing out the rest of the work, reading an e-book, playing a fun online game or watching a movie – you can do it all in your brand new Magus 2-in-1 Laptop without having to switch things up. The level of mobility and functionality is unmatched!</span></p>
                <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>3. Portability of Work</strong></h6> 
                <p><span lang="EN-US">Finding yourself getting anchored to your desk all the time? Cut yourself some slack and buy a Magus 2-in-1 laptop. Ask this question to yourself – ‘Does you being at your work table a factor is getting the work done?’ Well? Absolutely not! Now finish up a presentation or send important emails on the go or even when you step out of the workplace.</span></p>
                <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>4. Longer battery life</strong></h6> 
                <p><span lang="EN-US">Your obsession with the Power Outlet now comes to an end! If you are the kind of person who constantly finds himself on a lookout for power outlets, a 2-in-1 laptop device is what you should definitely consider. Now unplug yourself and see the productivity soaring.</span></p>
                <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>5. Become a Multitask Master</strong></h6> 
                <p><span lang="EN-US">Looking for a device that can enable you to multitask in a flash? Magus 2-in-1 laptop is your best bet. With speed and performance that matches the boldest tablets and laptops in the market, you can never go wrong with multitasking on a 2-in-1 device.</span></p>
                <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>6. Amazing Sound Experience</strong></h6> 
                <p><span lang="EN-US">What’s one of the best things that happen to be on a micro-architecture like a Magus 2-in-1 laptop? The Awesome Audio Playback feature! Not just that, with the latest voice interaction functionalities in your 2-in-1 laptop, you will simply fall in love with the camaraderie.</span></p>
                <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>7. Go Easy on your Bank Balance</strong></h6> 
                <p><span lang="EN-US">Does buying cutting edge technology mean spending huge bucks? Not anymore. With the Magus 2-in-1 laptop, you get the durability of a laptop with the freedom of a tablet. With all the latest features generally installed on a 2-in-1 laptop, you can escape spending your hard-earned cash to buy different devices with different functionality.</span></p>
                <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>8. Great Gaming Experience</strong></h6> 
                <p><span lang="EN-US">Love mobile gaming? But tired of playing on a minuscule screen? Hop on the AVITA Magus 2-in-1 Laptop and get the best mobile gaming experience. The 2-in-1 laptop is a perfect match when you want to up the screen size to fit your on-the-go gaming needs.</span></p>
                </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

    <script>
    
  $('.fb_share_btn').click( function(e) {

            e.preventDefault();

            FB.ui( {
                method: 'share',
                href: $(location).attr('href')
            }, function(response){

            });
        });
        

        $('.twitter_share_btn').click(function(e){

            e.preventDefault();

            var current_url = $('meta[property="og:url"]').prop('content');


            var share_url = "https://twitter.com/intent/tweet?text=" + encodeURIComponent( current_url );
            window.open( share_url, '_blank' );
        });



    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>