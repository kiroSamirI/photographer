<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
-->

<?php $__env->startSection('content'); ?>
    

    <form action = <?php echo e(url("/request")); ?> method = 'POST' >
    

<div class="form-group">
    <label name =address >address</label>
    <input type="text" name="address" class="form-control">
</div>
<div class="form-group">
    <label name =category>category</label>
    <input type="text" name="category" class="form-control">
</div>
<div class="form-group">
    <label name =contact_number>contact number</label>
    <input type="text" name="contact_number" class="form-control">
</div>

<div class="form-group">
        <label name =place>place</label>
        <input type="text" name="place" class="form-control">
    </div>

<div class="form-group">
    <label name =start_date>start date</label>
    <input type="date" name="start_date" class="form-control">
</div>
    <?php echo csrf_field(); ?> 
   <input type="hidden" value="<?php echo e(csrf_token()); ?>">
<button type="submit" class="btn btn-primery">submit</button>
</form>

<?php $__env->stopSection(); ?>

 




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* D:\project\photography\resources\views/requests/create.blade.php */ ?>