<?php $__env->startSection('content'); ?>
<h1>list images</h1>

<div class="container">
    <div class="dropdown">
         
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img class="card-img-top" src="/storage/images/<?php echo e($image->image); ?>" alt="Card image cap"style="width:30%;height:30%">
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  <a href="/photographer_home"><h3>return</h3></a>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\JC.TECH\Desktop\iooi\photography\resources\views/images/list.blade.php */ ?>