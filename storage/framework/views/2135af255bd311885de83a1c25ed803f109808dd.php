<?php $__env->startSection('content'); ?>
<div class="form-group">
    <h1><?php echo e($user->name); ?></h1>
</div>

<div class="form-group">
    <label>  rate:<div id="rateYo"></div></label>
        <?php echo e($user->rate); ?>

</div>

<div class="form-group">
    <label>  price per hour</label>
            <?php echo e($user->price); ?>

</div> 


<a href="/request/<?php echo e($user->id); ?>/edit">  request</a>
<script>
$(function () {
 
    $("#rateYo").rateYo({
      rating: 3.6
    });
   
  });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\Mina\Desktop\iooi\photography\resources\views/photographer_profile.blade.php */ ?>