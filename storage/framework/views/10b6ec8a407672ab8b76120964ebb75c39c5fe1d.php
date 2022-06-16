<div class="nav-product-panel">
    <div class="container">
        <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
        </div>

        <div class="product-nav-collapse">
            <ul
                class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
                <li class="nav-item"><a class="nav-link py-1"
                        href="<?php echo e(route('product.overview', 'LED-batten-downLight')); ?>"><?php echo app('translator')->getFromJson('site.led_batten_downlight'); ?></a></li>

                <div class="dropdown">
                    <a class="nav-link py-1"><?php echo app('translator')->getFromJson('site.ultimus_spec'); ?></a>
                    <div class="dropdown-content ">
                        
                        <a class="nav-link py-1 mobi"
                                href="<?php echo e(route('product.spec', 'led-bulb')); ?>"
                                style="padding-right: 40px!important;margin-top: 5px;font-size: -0.15rem!important;"><?php echo app('translator')->getFromJson('site.smart_light_bulb'); ?></a>
                                <a class="nav-link py-1 mobi"
                                href="<?php echo e(route('product.spec', 'led-batten')); ?>"
                                style="padding-right: 28px!important;font-size: -0.15rem!important;"><?php echo app('translator')->getFromJson('site.smart_led_batten'); ?></a>
                                <a class="nav-link py-1 mobi"
                                href="<?php echo e(route('product.spec', 'led-downlight')); ?>"
                                style="padding-right: 0px!important;font-size: -0.15rem!important;"><?php echo app('translator')->getFromJson('site.smart_led_downlight'); ?></a>

                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>

