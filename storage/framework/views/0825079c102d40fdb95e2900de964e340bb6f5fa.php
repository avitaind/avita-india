<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.contact_us'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main>
        <section class="aboutus-panel top-nav-padding ls-0">
            <div class="aboutus-contact py-5 px-2">
                <div class="container">
                    <h1 class="section-title mt-0 mb-5 my-md-5 font-weight-light"><?php echo app('translator')->getFromJson('site.contactus_contactus'); ?> </h1>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contact_us_card mb-4 mb-md-5">
                                <h3 class="contact_us_title">General Sales Enquiry</h3>

                                <div class="support_tel">+91-7827845054</div>

                                <div class="mb-2"><b>Email:</b><br>
                                    Insales@nexstgo.com</div>

                                <div><b><?php echo app('translator')->getFromJson('site.contactus_operating'); ?></b><br>
                                    Monday to Friday: 9am - 9pm</div>
                            </div>
                     
                             <div class="contact_us_card mb-4 mb-md-5">
                                <h3 class="contact_us_title">Repair Service and Technical support</h3>
                                <div class="support_tel">1800-818-178</div>
                                <div class="mb-2"><b>Email:</b><br>
                                    Indiasupport@avita.com</div>

                            </div>
                        </div>
                        <div class="col-sm-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.2536055828955!2d77.28351261508101!3d28.562146382445686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce7ea6bcee9bf%3A0x4fee98c6c6f1c5b1!2sAVITA%20India!5e0!3m2!1sen!2sin!4v1614163274176!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>





    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>