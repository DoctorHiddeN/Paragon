
<?php $__env->startSection('contents'); ?>
<?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class='ArticAdd form-group'>
    <form action="<?php echo e(route('catadd')); ?>" method='post'>
        <?php echo csrf_field(); ?>
        <label for="Name">Name:</label>
        <input class="form-control" type='text' name='name'>
        <label for="description">Description:</label>
        <input class="form-control" type='text' name='description'>
        <button style="margin-top:1%;" class="btn btn-danger" type='submit'>Submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/admin/add-cat.blade.php ENDPATH**/ ?>