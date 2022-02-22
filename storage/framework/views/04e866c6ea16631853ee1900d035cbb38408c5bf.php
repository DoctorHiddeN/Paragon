
<?php $__env->startSection('contents'); ?>

<h1 class="head-tit"> Categories List </h1>

<div class="Article container pt-3">
  <?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <a style="margin-bottom: 1%" href='<?php echo e(route('categories-add')); ?>' class="btn btn-success">Add New Category</a>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th class="col-sm-1" scope="col">id</th>
        <th class="col-sm-1" scope="col">Name</th>
        <th class="col-sm-1" scope="col">Description</th>
        <th class="col-sm-1" scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="col-sm-1">
        <td><?php echo e($cate->id); ?></td>
        <td><?php echo e($cate->name); ?></td>
        <td><?php echo e($cate->description); ?></td>
        <td>
          <div class="fm-cont" style="display:inline-block">
            <a class="btn btn-danger" style="display:inline-block" href="<?php echo e(route('catdelete',$cate->id)); ?>"  onclick="return confirm('Are you sure to delete this Category ?');">Delete</a>
        </div>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/admin/categories.blade.php ENDPATH**/ ?>