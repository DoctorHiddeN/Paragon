

<?php $__env->startSection('contents'); ?>
<?php echo $__env->make('layouts.headsec', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.show-off', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="first_service">
    <div class="first_servtext">
        <h3><?php echo e($articles->title); ?></h3>
        <p><?php echo e($articles->body); ?></p>
    </div>
    <div class="first_servimg">
        <img src="/images/<?php echo e($articles->thumbnail); ?>">
    </div>
</div>
<form action=<?php echo e(route('logout')); ?> method="POST">
    <?php echo csrf_field(); ?>
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/index.blade.php ENDPATH**/ ?>