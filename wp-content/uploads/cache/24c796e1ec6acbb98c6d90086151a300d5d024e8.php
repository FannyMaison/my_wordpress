<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	    <section class="py-5">
	    	<h2><?php echo e($post->post_title); ?></h2>
	    	<p><?php echo e($subtitle); ?></p>
	    	
	    	<?php echo $post->post_content; ?>

	  		<div class="flex my-10 -mx-3">
	  		  <?php (new \Sober\Controller\Blade\Debugger(get_defined_vars())); ?>
	  		  <?php $__currentLoopData = $realisations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $realisation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="w-1/3 relative px-3">
						<a href="<?php echo e($realisation->permalink); ?>" class="text-black no-underline">
							<div class="bg-grey-light flex flex-col p-5 rounded">
								<img class="rounded mb-5" src="<?php echo e($realisation->thumb); ?>" alt="<?php echo e($realisation->alt); ?>">
							</div>
						</a>	
					</div>
					<?php if($loop->iteration % 3 === 0): ?>
					</div>
					<div class="flex mb-5">
					<?php endif; ?>
			  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  		</div>
      </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>