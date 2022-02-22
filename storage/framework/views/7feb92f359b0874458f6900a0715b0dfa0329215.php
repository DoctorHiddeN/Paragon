
<?php $__env->startSection('contents'); ?>
<?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class='ArticAdd form-group'>
    <form action="#" method='post'>
        <?php echo csrf_field(); ?>
        <label for="Email">Email:</label>
        <input class="form-control" type='email' name='Email'>
        <label for="pass">password:</label>
        <input class="form-control" type='password' name='password'>
        <button style="margin-top:1%;" class="btn btn-danger" type='submit'>Submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/admin/admins-login.blade.php ENDPATH**/ ?>