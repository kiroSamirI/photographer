<?php $__env->startSection('content'); ?>
<div><label>photosession date:<?php echo e($req->date); ?></label></div>
<div><label>photosession category:      <?php echo e($req->category); ?></label></div>
<div><label>photosession place:     <?php echo e($req->place); ?></label></div>
<div><label>client contact number:     <?php echo e($req->contact_number); ?></label></div>
<button type="submit">Accept</button>
<button type="submit">Refuse</button>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\Mina\Desktop\iooi\photography\resources\views/requests/show.blade.php */ ?>