<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.DOMUS_home'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<main class="top-nav-padding">

    <section class="product-liber-banner">

    <div class="card card-image" style="background-image: url('https://svarochi.com/wp-content/uploads/2018/01/full-banner1.jpg');">
      <div class="text-white text-center py-5 px-4 my-5 ">
        <div>
          <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Create your beautiful website with
              MDBootstrap</strong></h2>
          <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam,
            voluptatem,
            optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos. Odit sed
            qui, dolorum!
          </p>
          <a class="btn btn-outline-white btn-md"><i class="fa fa-clone left"></i> View project</a>
        </div>
      </div>
    </div>
    </section>

</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>