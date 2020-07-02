<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.sales_enquiry'); ?>
<?php $__env->stopSection(); ?>

<?php 
        $page = 'sales';
     ?>

<?php $__env->startSection('content'); ?>
    <main class="top-nav-padding">
        
        <section class="product-liber-banner py-5 px-2" >
    <div class="row">
    <div class="container"  style="text-align: center; padding:2%;">
    <div>
    <span>Thank you for your interest in AVITA. Please fill in the form below for any sales enquiries. We will get in touch with you shortly. All fields marked with an asterisk (*) are required.</span>
    </div>
<br/>
<div>
<strong>Toll Free</strong>: 1800-103-9635, <strong>Whatsapp</strong>: <a href="https://api.whatsapp.com/send?phone=917827845054" target="_blank" rel="noopener noreferrer">+91-7827845054</a>, <strong>Phone</strong>: +91-7042144117 
</div>
<div class="container"  style="text-align: center; padding:5%;">

    <?php if(session()->has('message')): ?>
    <div class="alert alert-success">
       <?php echo e(session()->get('message')); ?>

     </div>
    <?php endif; ?>
    <form action="/sales-enquiry" method="POST" role="form" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

     <!--Student Name Start-->
    <div class="form-group row">
     <label for="name">Name* :</label>
     <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" require>
    </div>
   <!-- Student Name End-->
   <!-- Email Start-->
   <div class="form-group row">
     <label for="email">Email*:</label>
     <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" require>
   </div>
   <!-- Email End-->
      <!-- Phone Number Start-->
  <div class="form-group row">
   <label for="phone">Phone Number* :</label>
   <input type="text" class="form-control" placeholder="Enter Phone Number" id="phone" name="phone" require>
   </div>
   <!-- Phone Number End-->
    <!-- Enquiry Start-->
    <div class="form-group row">
     <label for="internship">Enquiry* :</label>
     <textarea class="form-control" rows="4", cols="54" id="enquiry" name="enquiry" require> </textarea>
   <!-- College Name End-->
    </div>
    <div class="form-group row">
   <button type="submit" class="btn btn-primary">Submit</button>
 
</div>
</div>
</form>
    </div>
</section>
        
        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/product-liber.css')); ?>"/>
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>"/>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script type="text/javascript" src="<?php echo e(asset('js/liber.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>