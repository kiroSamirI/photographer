<?php $__env->startSection('content'); ?>
<div><label>photosession date:<?php echo e($req->date); ?></label></div>
<div><label>photosession category:      <?php echo e($req->category); ?></label></div>
<div><label>photosession place:     <?php echo e($req->place); ?></label></div>
<div><label>client contact number:     <?php echo e($req->contact_number); ?></label></div>
<a href="/photographer_home"><button>Accept</button></a>


<form method="POST" action="<?php echo e(url("/request/$req->id")); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <input type="hidden" value="PUT" name="_method">

    submit <button type="submit">submit</button>
    
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\JC.TECH\Desktop\iooi\photography\resources\views/requests/show.blade.php */ ?>