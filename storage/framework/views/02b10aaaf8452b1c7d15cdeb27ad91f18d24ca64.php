<div class="services" id="services">
    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="services_items">
    <img src="/images/<?php echo e($service->thumbnail); ?>">
    
    <a href=<?php echo e(route('show',['category'=>$service->Categories->name,'article'=>$service->title])); ?>><h1><?php echo e($service->title); ?></h1></a>
    <p><?php echo e($service->description); ?></p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/layouts/services.blade.php ENDPATH**/ ?>