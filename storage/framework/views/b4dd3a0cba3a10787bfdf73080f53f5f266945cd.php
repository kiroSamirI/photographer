<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card" style="width: 18rem;display: inline-block">
  <img class="card-img-top" src="/image/no_image.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo e($user->name); ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/photographer/<?php echo e($user->id); ?>" class="btn btn-primary">profile</a>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\Mina\Desktop\iooi\photography\resources\views/user_home.blade.php */ ?>