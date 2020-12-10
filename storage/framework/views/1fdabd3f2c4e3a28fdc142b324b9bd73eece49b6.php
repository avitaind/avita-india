<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.whats_new'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main>
    <section class="focus-event top-nav-padding">
        <div class="container">
            <h3 class="section-title ls-0 my-5"><?php echo app('translator')->getFromJson('site.news_title'); ?></h3>
            <div class="row">
                <?php $__currentLoopData = $feature_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature_news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__env->startComponent('news.feature_news_block', ['news' => $feature_news ]); ?>
                    <?php echo $__env->renderComponent(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="other-event py-5" >
   
         <div class="container">
            <h2 class="page-title mb-5"><?php echo app('translator')->getFromJson('site.news_other_event'); ?></h2>
             <div class="row">
              <select id="news-month-option" class="col-12 col-md-auto event-filter custom-select ml-auto mt-3 mt-md-0">

                   <?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $month_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>" <?php echo e($key == $selected_month ? "selected" : ""); ?> ><?php echo e($month_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
    

            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

           <a class="list-item d-flex flex-column col-12 col-md-6 col-lg-4 mb-4" target="_blank" href="<?php echo e($item->url); ?>">

             <div class="list-pic-wrapper">
                <div class="bg-item" style="background-image: url('<?php echo e($item->image_path); ?>')"></div>
             </div>
            <div class="list-item-content p-3">
                <p class="list-item-title font-weight-bold"><?php echo e($item->title); ?></p>
                <p class="list-item-para">
                    <?php echo e($item->caption); ?> 
                </p>
             </div>
            </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <div class="text-center mt-3">
                <?php echo e($news->links('vendor.pagination.bootstrap-4')); ?>

            </div>
        </div>
      
    </section>

    <div class="gotop-wrap">
        <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
    </div>

</main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('#news-month-option').change( function(event) {

            window.location = '<?php echo e($country); ?>/news/'+ $(this).val() ;
        })
    </script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>

    <style>

        .status {
            color: #ffffff;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            background-color: #692c90;
        }


        .status.in_progress { background-color: #65318f; }
        .status.coming_soon { background-color: #a270c9; }
        .status.finished    { background-color: #a1a1a1; }

        .status-sm {

            display: inline;
            font-size: 0.8rem;
            padding: 3px 1rem;
        }

        .status-md {

            min-width: 160px;

        }
    </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>