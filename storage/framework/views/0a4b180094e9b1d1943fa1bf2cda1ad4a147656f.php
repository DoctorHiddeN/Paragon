<form action="<?php echo e(route('ins-comment')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <label for="Email">Email:</label>
    <input type="email" id="c-email" name="email" value="<?php echo e($email); ?>" class="form-control" readonly>
    <label for="Comment">Comment:</label>
    <textarea style="resize:none;"name="body" id="cm" cols="30" rows="10" class='form-control'></textarea>
    <input type="hidden" name="article_id" value="<?php echo e($articles->id); ?>">
    <div class="form-group mt-4 mb-4">
        <div class="captcha">
            <span><?php echo captcha_img(); ?></span>
            <button type="button" class="btn btn-danger" class="reload" id="reload">
                &#x21bb;
            </button>
        </div>
    </div>

    <div class="form-group mb-4">
        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
    </div>

    <button class="btn btn-success" type="submit">Submit</button>
</form><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/layouts/comments.blade.php ENDPATH**/ ?>