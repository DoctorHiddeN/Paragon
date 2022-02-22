
<?php $__env->startSection('contents'); ?>
<?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h1><?php echo e($article->title); ?></h1>
<img src="/images/<?php echo e($article->thumbnail); ?>">
<h2><?php echo e($article->description); ?></h2>
<h6><?php echo e($article->body); ?></h6>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if(Auth::check()): ?>
<div class="comment-insert">
    <?php echo $__env->make('layouts.comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php endif; ?>
<div class="comments">
    <h3>Comments For This Article:</h3>
    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="comment">
        <label for="comment"><?php echo e($comment->User->email); ?></label>
        <h6><?php echo e($comment->body); ?></h6>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/layouts/articlesShow.blade.php ENDPATH**/ ?>