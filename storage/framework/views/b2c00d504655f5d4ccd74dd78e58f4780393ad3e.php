<?php $__env->startSection('content'); ?>
<div class="form-group">
    <?php echo e($user->name); ?>

</div>

<div class="form-group">
    <label>rate:<div id="rateYo"></div></label>
        <?php echo e($user->rate); ?>

</div>

<div class="form-group">
    <label>price per hour</label>
            <?php echo e($user->price); ?>

</div> 


<a href="/request/create">request</a>
<script>
$(function () {
 
    $("#rateYo").rateYo({
      rating: 3.6
    });
   
  });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* D:\project\photography\resources\views/photographer_profile.blade.php */ ?>