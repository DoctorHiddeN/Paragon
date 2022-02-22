<div class="nav-bars">
    <ul>
        <?php if(Auth::check()): ?>

        <li>
            <a style="color:white" href="#">User-Pannel</a>            
        </li>
        <?php else: ?>
        <li>
            <a style="color:white" href="<?php echo e(route('register')); ?>">Register</a>            
        </li>
        <li>
            <a style="color:white" href="<?php echo e(route('login')); ?>">Login</a>            
        </li>
        <?php endif; ?>
        <li>
            <a style="color:white" href="#">About-Us</a>            
        </li>
        <li>
            <a style="color:white" href="#">FaQ</a>            
        </li>
    </ul>
</div><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>