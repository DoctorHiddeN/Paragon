<div class="head-er">
    <img id="logo" src="/images/Photo_1643740838737.png">
    
        <div class="navbar_drop">
            <ul>
                <li><a href="<?php echo e(route('about')); ?>">درباره ما</a></li>
                <li><a href="#services">خدمات ما</a></li>
                <li><a href="<?php echo e(route('templates')); ?>">نمونه کارها</a></li>
                <li><a href="#">مقالات</a>
                    <div class="navbar_content">
                        <?php if(isset($categories)): ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <a href="<?php echo e(route('category',$cate->name)); ?>"><?php echo e($cate->name); ?></a>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                     </div>
                </li>
                     <li><a href="<?php echo e(route('home')); ?>">خانه</a></li>
              </ul>
    </div>
    <div id="search-bar" class="search-bar">
        <form method="POST" action="<?php echo e(route('result')); ?>">
            <?php echo csrf_field(); ?>
            <input class="form-control" type="text" name="search_val">
            <button type="submit" class="btn btn-primary" name="search">Search</button>
        </form>
    </div>
    <div class="call-me">
        <img src="/images/[CITYPNG.COM]HD Dark Purple Round Circle Phone Icon PNG - 1024x1024.png">
        <div class="numb"><small id="cod">0921</small><h6>0848772</h6><br/><small id="name">Paragon-Development</small></div>
    </div>
</div><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/layouts/header.blade.php ENDPATH**/ ?>