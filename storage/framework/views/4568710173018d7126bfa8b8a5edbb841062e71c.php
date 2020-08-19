<h2>Dear <?php echo e($name); ?>,</h2>
<img src="<?php echo e($message->embed(public_path() . '/images/cap-auto-reply.png')); ?>" alt="" />

<span class="btn btn-primary">
<a href="<?php echo e($message->embed(public_path().'/images/Declaration-by-the-Candidate.pdf')); ?>"  target="_blank" download="<?php echo e(public_path().'/images/Declaration-by-the-Candidate.pdf'); ?>"></a>
</span>