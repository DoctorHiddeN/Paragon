
<?php $__env->startSection('contents'); ?>


<form action='<?php echo e(route('testshow',['test1'=>'hellow','test2'=>'heya'])); ?>' method="post">
  <?php echo csrf_field(); ?>
  <button type="submit" class="btn btn-danger">Click me </button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/test.blade.php ENDPATH**/ ?>