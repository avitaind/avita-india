 

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
                <p><span lang="EN-US">Millennials need their own space. This statement not just applies to their lifestyle but also aptly fits with their computing needs. Although today's computer systems provide an ample amount of storage that people do not worry about it anymore, the question – Is storage a major factor in choosing a certain laptop or PC, still remains. If your answer to the above question is YES, we recommend you to keep reading because, today, you are about to find out all the extra features of Cloud Storage that you can use to your benefit. Let’s cut to the chase and dive straight in! Here are the factors one must underscore while considering Cloud Storage.</span></p>
                <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>1. Affordability</strong></h6>       
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