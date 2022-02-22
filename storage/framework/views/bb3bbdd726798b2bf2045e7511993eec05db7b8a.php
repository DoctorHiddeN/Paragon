    <?php if($message = Session::get('success')): ?>

    <?php endif; ?>

    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('image.upload.post')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
                <label for="upload">Upload Images:</label>
                <input type="file" name="name" class="form-control">
                <label for="Alt">Alt:</label>
                <input type="text" name="alt" class="form-control">
                <input type="hidden" name="article_id" value="<?php echo e($article->id); ?>">
                <button type="submit" class="upbtn btn btn-success">Upload</button>
    </form>
<?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/layouts/upload.blade.php ENDPATH**/ ?>