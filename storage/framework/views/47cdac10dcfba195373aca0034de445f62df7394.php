
<?php $__env->startSection('contents'); ?>

<h1 class="head-tit"> Comments Pannel </h1>

<div class="Article container pt-3">
  <?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th class="col-sm-1" scope="col">id</th>
        <th class="col-sm-1" scope="col">Article</th>
        <th class="col-sm-1" scope="col">User</th>
        <th class="col-sm-1" scope="col">Comment</th>
        <th class="col-sm-1" scope="col">->Status<-</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="col-sm-1">
        <th scope="row"><?php echo e($comment->id); ?></th>
        <td><?php echo e($comment->Articles->title); ?></td>
        <td><?php echo e($comment->User->email); ?></td>
        <td><?php echo e($comment->body); ?></td>
        <td><a href="<?php echo e(route('cm-flag',$comment->id)); ?>"><?php echo e($comment->flag); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/admin/comments.blade.php ENDPATH**/ ?>