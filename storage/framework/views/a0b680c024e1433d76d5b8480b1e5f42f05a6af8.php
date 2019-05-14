<?php $__env->startSection('content'); ?>
<h1>edit</h1>

<?php $id = auth()->user()->id  ?>
        <form method="POST" action="<?php echo e(url("/photographer/$id")); ?>" enctype="multipart/form-data">
            <div class ="form-control"> 
            name <input name="name" type="text" value= "<?php echo e($photographer->name); ?>" ><br>
            </div>
            email <input type="email" name="email" value= "<?php echo e($photographer->email); ?>" ><br>
            password <input type="password" name="password"><br>
            <?php echo e(csrf_field()); ?>

            confirm password <input type="password" name="password_confirmation"><br>
            phone_number <input name="phone_number" type="text" value= "<?php echo e($photographer->phone_number); ?>" ><br>
            price <input name="price" type="number" value= "<?php echo e($photographer->price); ?>" ><br>

            image <input type="file" name="cover_image">
            <input type="hidden" value="PUT" name="_method"><br>
            submit <button type="submit">submit</button>
            
        </form>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\JC.TECH\Desktop\iooi\photography\resources\views/edit.blade.php */ ?>