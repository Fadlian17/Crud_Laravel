<?php $__env->startSection('content'); ?>
	<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-2" style="padding: 0 200px;">
			<table class="table table-hover col-12" style="text-align: center; border: 1px solid #ccc;">
				<thead>
					<tr class="table-primary">
						<th>Title</th>
						<th>Content</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>

					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						
					<tr>
						<td><?php echo e($post->title); ?></td>
						<td><?php echo e($post->content); ?></td>
						<td><a href="<?php echo e(url('post/'.$post->id.'/edit')); ?>" class="btn btn-success">Edit</a></td>
						<td>
							<form action="<?php echo e(route('post.destroy', $post)); ?>" method="post">
								<?php echo e(csrf_field()); ?>

								<?php echo e(method_field('DELETE')); ?>

								<button onclick="return confirm('Konfirmasi Hapus')" id="deleteButton" class="btn btn-xs btn-danger" type="submit">Delete</button>
							</form>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>