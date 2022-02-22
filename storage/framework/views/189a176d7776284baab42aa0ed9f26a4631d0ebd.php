
<?php $__env->startSection('contents'); ?>

<h1 class="head-tit"> Articles List </h1>

<div class="Article container pt-3">
  <?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <a style="margin-bottom: 1%" href='<?php echo e(route('articles-add')); ?>' class="btn btn-success">Add New Article</a>
<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th class="col-sm-1" scope="col">id</th>
        <th class="col-sm-1" scope="col">Title</th>
        <th class="col-sm-1" scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="col-sm-1">
        <th scope="row"><?php echo e($article->id); ?></th>
        <td><?php echo e($article->title); ?></td>
        <td>
          <div class="fm-cont" style="display:inline-block">
            <a class="btn btn-danger" style="display:inline-block" href="<?php echo e(route('artdelete',$article->id)); ?>"  onclick="return confirm('Are you sure to delete this Article ?');">Delete</a>
            <a class="btn btn-danger" style="display:inline-block" href="<?php echo e(route('artedit',$article->id)); ?>">Edit</a>
        </div>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/admin/articles.blade.php ENDPATH**/ ?>