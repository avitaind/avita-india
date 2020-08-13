<h2>Dear <?php echo e($name); ?>,</h2>
<img src="<?php echo e($message->embed(public_path() . '/images/cap-auto-reply.png')); ?>" alt="" />

<!--- <a href="<?php echo e($message->attach(public_path() . '/images/AVITA-Family-Brochure.pdf')); ?>" target="_blank" download="<?php echo e($message->attach(public_path() . '/images/AVITA-Family-Brochure.pdf')); ?>">Download File</a> --->
