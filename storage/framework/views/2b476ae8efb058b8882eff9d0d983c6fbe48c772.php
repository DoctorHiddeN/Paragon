
<?php $__env->startSection('contents'); ?>
<?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class='ArticAdd form-group'>
    <form action="<?php echo e(route('artadd')); ?>" method='post'>
        <?php echo csrf_field(); ?>
        <label for="title">Title:</label>
        <input class="form-control" type='text' name='title'>
        <label for="slug">Slug:</label>
        <input class="form-control" type='text' name='slug'>
        <label for="body">Article Description:</label>
        <textarea style="resize:none;"name="description" id="1" cols="5" rows="5" class='form-control'></textarea>
        <label for="body">Article Body:</label>
        <textarea style="resize:none;"name="body" id="2" cols="30" rows="10" class='form-control'></textarea>
        <button style="margin-top:1%;" class="btn btn-danger" type='submit'>Submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/admin/articles-add.blade.php ENDPATH**/ ?>