 

 <?php $__env->startSection('title'); ?>
        <?php echo app('translator')->getFromJson('title.blog9'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <section class="event-detail top-nav-padding">
            <div class="container mb-5">
                <br/>
               <div class="event-banner">
                        <img src="/images/blog/AVITA-breaks-down-the-Most-Creative-Career-Choices-students-make-today.jpg" class="img-responsive" />
                    </div>
        <div class="event-desc-block pb-5">
        <h5 class="text-center mt-4 mb-3 font-weight-light"><?php echo app('translator')->getFromJson('site.blog9'); ?></h5>
        <p><span lang="EN-US">Do you like expressing your originality and are good with OUT-OF-THE-BOX thinking? If your answer to the above question is YES, the chances are that your RIGHT creative brain is more dominant over your LEFT analytical brain. In recent years, many Indian students have said "Goodbye" to the common career fields and have decided some creative career options. Everyone would agree with the statement that- using correct accessories can ease the overall process, especially for those who produce something creative. Such creative students need a special laptop that can handle the demanding load of resource-hogging software and deliver great output without taking the toll. But don't worry. We have your back. AVITA is a laptop brand which is specially designed to break the pain-points of creative users. Want to know how? Okay. Let's dive into it.</span></p>
        <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>LIBER Screen for Graphic Designers</strong></h6>
        <p><span lang="EN-US">Choosing the best-fitted screen is perhaps the most important decision in choosing the right laptop. LIBER Series laptops provide outstanding visuals, a higher resolution with better details and colour accuracy. These detailed screen features can be the best companion for any graphic designer.</span></p>
        <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>Hi-Tech Keyboard for the Content Writers</strong></h6>
        <p><span lang="EN-US">The sky is the limit if you are a creative content writer. AVITA laptops have a unique keyboard design which pleases fingers in every touch and maintains the typing speed which is essential for every writer.</span></p>
        <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>Radio Jockey</strong></h6>
        <p><span lang="EN-US">If you are skilled in talking your way out of uncomfortable conversations, then career paths such as Radio Joking and Anchoring could be your area of interest. We have everything to offer to such users. AVITA laptops have a high-quality microphone that captures human voices very well. You can record in it, play in it, and you are good to go.</span></p>
        <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>Advertising</strong></h6>
        <p><span lang="EN-US">A career in advertising has been promising because companies need to do much more than manufacturing the best product and providing the best service to attract the target audience. This is where advertising professionals come in. Advertising professionals perform varied roles such as client-servicing, research, copywriting, editing, scriptwriting, and much more. In such a demanding job, people need a laptop that can handle the load. AVITA is a perfect choice as it has 8 hours battery backup, with latest Intel i5 processor for fast processing.</span></p>
        <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>Conclusion</strong></h6>
        <p><span lang="EN-US">Indian youth is breaking the stereotypes and going for the career of their choice. In such a situation, AVITA is a brand which is ready to be with you at every step. We are providing everything you are looking for in your dream laptop.</span></p>

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