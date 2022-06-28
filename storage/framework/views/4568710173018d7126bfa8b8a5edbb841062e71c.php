<h2>Dear <?php echo e($name); ?>,</h2>
<p>Please find attached to this mail a pdf file for 'Declaration by the candidate'. You must sign this document and attach it to the mail if you wish to enroll in the program.</p>

<img src="<?php echo e($message->embed(public_path() . '/images/cap-auto-reply.png')); ?>" alt="" />

<span class="btn btn-primary">
<a href="<?php echo e($message->embed(public_path().'/images/Declaration-by-the-Candidate.pdf')); ?>"  target="_blank" download="<?php echo e(public_path().'/images/Declaration-by-the-Candidate.pdf'); ?>"></a>
</span>