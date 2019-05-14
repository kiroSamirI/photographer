<?php $__env->startSection('content'); ?>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List Of Requests</h2>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Requests
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
        
      <?php $__currentLoopData = $Reqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Req): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><a href="/request/<?php echo e($Req->id); ?>">  <?php echo e($Req->date); ?></a></li>
      
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* D:\project\photography\resources\views/requests/list.blade.php */ ?>