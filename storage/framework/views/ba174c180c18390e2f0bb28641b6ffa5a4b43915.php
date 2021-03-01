<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.contact_us'); ?>
<?php $__env->stopSection(); ?>

<?php 
 $page = 'contactus';
 ?>

<?php $__env->startSection('content'); ?>
    <main>
       <section class="aboutus-panel top-nav-padding ls-0">
            <div class="aboutus-contact py-5 px-2">
                <div class="container">
                    <h3 class="text-left mt-4 mb-3 font-weight-light"><?php echo app('translator')->getFromJson('site.contactus_contactus'); ?></h3>
                    <p>AVITA Customer Support. We are always available in case you need help. For queries on the product, warranty related inquiries or any form of customer support, please contact us on our  toll-free customer support number or write to on our support email for general sales enquiry.</p>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="contact_us_title">General Sales Enquiry :</h2>

                            <div class="mb-2">+91-7827845054</div>

                            <div class="mb-2"><b>Email :</b><br>
                                Insales@nexstgo.com</div>

                            <div><b><?php echo app('translator')->getFromJson('site.contactus_operating'); ?> :</b><br>
                                Monday to Friday : 9:00 am - 6:00 pm</div>


                            <div class="mb-2"><b>Address :</b><br>
                                     Tower A, 405, 4<sup>th</sup> Floor, Copia Business Suites, <br/>Jasola Vihar, New Delhi – 110025</div>
                            <h2 class="contact_us_title">Service :</h2>
                            <div class="mb-2">Toll Free : 1800-103-9635</div>

                        </div>
                        <div class="col-sm-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14018.80764606324!2d77.27820308857007!3d28.548678217944985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce342cfe1b883%3A0x49d836c6d03ff6da!2sCopia%20Corporate%20Suites%20Jasola!5e0!3m2!1sen!2sin!4v1608119662161!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                        </div>
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