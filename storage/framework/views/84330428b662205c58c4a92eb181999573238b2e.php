<!-- Footer -->
<footer class="footer">
    <div class="footer-social py-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-around justify-content-md-start">
                <span class="d-inline-block navbar-brand hidden-sm-down">
                    <img src="/images/logo.png"/>
                </span>


                <?php 
                    $sns_icons = [ 'facebook' => facebookLinkForCountry($country),
                      'twitter' => twitterLinkForCountry($country),
                      'instagram' => instagramLinkForCountry($country),
                      'whatsapp' => whatsappLinkForCountry($country),
                      'youtube' => youtubeLinkForCountry($country),
                   
                      ];
                 ?>

                <?php $__currentLoopData = $sns_icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sns_name => $sns_url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if( $sns_url ): ?>
                        <a class="ml-0 <?php echo e($loop->first ? 'ml-md-auto' : 'ml-md-3'); ?>" href="<?php echo e($sns_url); ?>" target="_blank"><i class="fa fa-<?php echo e($sns_name); ?>" aria-hidden="true"></i></a>
                    <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>
    </div>

    <div class="footer-info py-0 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 py-3 py-md-0 text-left">
                    <div class="d-flex justify-content-between hidden-xs-down">
                        <div class="d-flex flex-column mr-3 ml-md-0 small-lsm-little">
                            <a href="<?php echo e(route('product.overview', ['liber-new-generation'])); ?>" class="my-1"><?php echo app('translator')->getFromJson('site.products'); ?></a>
                            <a href="<?php echo e(route('news')); ?>" class="my-1"><?php echo app('translator')->getFromJson('site.news'); ?></a>
                            <a href="/aboutus" class="my-1"><?php echo app('translator')->getFromJson('site.footer_aboutus'); ?></a>
                        </div>
                        <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">

                            <a href="<?php echo e(route('product.map', ['liber'])); ?>" class="my-1"><?php echo app('translator')->getFromJson('site.header_where_to_buy'); ?></a>

                            <?php if( $storeURL ): ?>
                                <a class="my-1" target="_blank" href="<?php echo e($storeURL); ?>"><?php echo app('translator')->getFromJson('site.header_store'); ?></a>
                            <?php endif; ?>

                            <a href="/contact-us" class="my-1"><?php echo app('translator')->getFromJson('site.footer_contact'); ?></a>


                        </div>
                        <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">
                            <a href="<?php echo e(route('support')); ?>" class="my-1"><?php echo app('translator')->getFromJson('site.productnav_support'); ?></a>
                            <a href="<?php echo e(route('repair-tnc')); ?>" class="my-1"><?php echo app('translator')->getFromJson('site.footer-repair-tnc'); ?></a>
                            <a href="/tnc" class="my-1"><?php echo app('translator')->getFromJson('site.terms'); ?></a>
                            <a href="/tnc" class="my-1"><?php echo app('translator')->getFromJson('site.privacy'); ?></a>
                        </div>
                    </div>
                    <div class="d-flex hidden-sm-up">
                        <div class="d-flex flex-column mr-5 small-lsm-little">
                            <a href="<?php echo e(route('product.overview', ['liber12'])); ?>" class="my-1"><?php echo app('translator')->getFromJson('site.products'); ?></a>
                            <a href="<?php echo e(route('news')); ?>" class="my-1"><?php echo app('translator')->getFromJson('site.news'); ?></a>
                            <a href="/aboutus" class="my-1"><?php echo app('translator')->getFromJson('site.footer_aboutus'); ?></a>
                            <a href="<?php echo e(route('product.map', ['liber'])); ?>" class="my-1"><?php echo app('translator')->getFromJson('site.header_where_to_buy'); ?></a>

                            <?php if( $storeURL ): ?>
                                <a class="my-1" target="_blank" href="<?php echo e($storeURL); ?>"><?php echo app('translator')->getFromJson('site.header_store'); ?></a>
                            <?php endif; ?>

                        </div>
                        <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">


                            <a href="<?php echo e(route('repair-tnc')); ?>" class="my-1"><?php echo app('translator')->getFromJson('site.footer_contact'); ?></a>

                            <a href="<?php echo e(route('support')); ?>" class="my-1"><?php echo app('translator')->getFromJson('site.productnav_support'); ?></a>

                            <a href="<?php echo e(route('repair-tnc')); ?>" class="my-1"><?php echo app('translator')->getFromJson('site.footer-repair-tnc'); ?></a>

                            <a href="/tnc" class="my-1"><?php echo app('translator')->getFromJson('site.terms'); ?></a>
                            <a href="/tnc" class="my-1"><?php echo app('translator')->getFromJson('site.privacy'); ?></a>

                        </div>
                    </div>
                </div>
                <!---

                --->
                <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">

                <div class="col-12 col-md-3 py-3 py-md-0 text-left">
                    <div class="d-flex justify-content-between hidden-xs-down">
                        <div class="d-flex flex-column mr-3 ml-md-0 small-lsm-little">
                            <p class="heading">Available On</p>
                            <a href="https://in.nexstmall.com/" target="_blank" class="my-1">NEXSTMALL</a>
                            <a href="https://www.flipkart.com/search?q=avita+laptops&otracker=search&otracker1=search&marketplace=FLIPKART&p%5B%5D=facets.serviceability%5B%5D%3Dtrue&p%5B%5D=facets.brand%255B%255D%3DAvita" target="_blank" class="my-1">Flipkart</a>
                            <a href="https://www.amazon.in/s?k=avita+admiror" target="_blank" class="my-1">Amazon</a>
                            <a href="https://paytmmall.com/shop/search?q=avita&from=organic&child_site_id=6&site_id=2&page=1&brand=510306" target="_blank" class="my-1">Paytm Mall</a>
                        </div>
                    </div>

                    </div>

                </div>

                <div class="col-12 col-md-4 pb-3 py-md-0 text-md-right">
                    <div class="d-flex flex-wrap h-100 align-content-between">
                        <div class="col-12 info-lang w-100 px-0 hidden-sm-down">
                            <a class="col-6 px-0" href="https://avita.com/entry"><i class="fa fa-globe mr-2" aria-hidden="true"></i><span class="">INDIA</span></a>
                        </div>
                        <div class="col-12 info-lang w-100 px-0 hidden-md-up pb-sm-2">
                            <a class="col-6 px-0" href="https://avita.com/entry"><i class="fa fa-globe mr-2" aria-hidden="true"></i><span class="pr-2"><?php echo e(strtoupper( __("site.global_{$country}"))); ?></span></a>


                        </div>
                        <div class="info-copyright w-100"><a target="_blank" href="http://www.nexstgo.com">© Nexstgo Company Ltd.</a>  All rights reserved.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ./Footer -->
