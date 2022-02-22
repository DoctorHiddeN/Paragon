<div class="nav-bar-container">
    <form method="post" action="<?php echo e(route('logout')); ?>">
    <?php echo csrf_field(); ?>
        <button class="btn btn-danger" type="submit" name="logout">Logout</button>
    </form>
    <a class="btn btn-danger" href="<?php echo e(route('ad-home')); ?>">Home</a></li>   
</div><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/layouts/admin-header.blade.php ENDPATH**/ ?>