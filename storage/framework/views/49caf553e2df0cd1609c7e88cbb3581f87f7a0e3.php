
<?php $__env->startSection('contents'); ?>
<?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h1 id="art-title"><?php echo e($article->title); ?></h1>
<div class="article-Container">
<div class="article-image">
    <img src="/images/<?php echo e($article->thumbnail); ?>">
</div>
<div class="main-article">

<h2><?php echo e($article->description); ?></h2>
<p><?php echo e($article->body); ?></p>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 





<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/articlesShow.blade.php ENDPATH**/ ?>