<?php $__env->startSection('content'); ?>
<h1>add images</h1>

<form method="POST" action="<?php echo e(url("/images")); ?>" enctype="multipart/form-data">


<input type="file" name="image"><br>

<?php echo csrf_field(); ?> 
<input type="hidden" value="<?php echo e(csrf_token()); ?>">

<button type="submit" class="btn btn-primery">submit</button>
            
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\JC.TECH\Desktop\iooi\photography\resources\views/images/add_images.blade.php */ ?>