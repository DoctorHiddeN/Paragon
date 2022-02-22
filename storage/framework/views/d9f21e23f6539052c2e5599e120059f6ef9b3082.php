<div class="categories">
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="cat-items">
      <div class="cat-articles">
        <img src='/images/<?php echo e($cat->Articles->last()->thumbnail); ?>' width="150px" height="150px">
        <h1><?php echo e($cat->Articles->last()->title); ?></h1>
    </a>
    <h6><?php echo e($cat->Articles->last()->description); ?></h6>
    <a class="clickmore" href=<?php echo e(route('showart',$cat->Articles->last()->slug)); ?>>click for more .. </a>
      </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/layouts/category.blade.php ENDPATH**/ ?>