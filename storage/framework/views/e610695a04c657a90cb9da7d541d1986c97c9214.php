<?php $__env->startSection('content'); ?>
	<div class="container">
		<form class="" action="<?php echo e(route('post.store')); ?>" method="post" >
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="">Title</label>
				<input type="text" class="form-control" name="title" placeholder="Post title">
			</div>
		

			<div class="form-group">
				<label for="">Category</label>
				<select name="category_id" id="" class="form-control">
					<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($Category->id); ?>"> <?php echo e($Category->name); ?> </option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>	 
			</div>

			<div class="form-group">
				<label for="">Content</label>
				<textarea name="content" rows="5" class="form-control" placeholder="Post content"></textarea>
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Save">
			</div>

		</form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>