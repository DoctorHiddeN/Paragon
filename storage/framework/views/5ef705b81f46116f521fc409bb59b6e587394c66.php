
<?php $__env->startSection('contents'); ?>
<?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Tab links -->
<div class="update-container">
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Desc')" id="defaultOpen">Description</button>
        <button class="tablinks" onclick="openTab(event, 'Slug&title&category')">Slug&Title&Category</button>
        <button class="tablinks" onclick="openTab(event, 'Body')">Body</button>
        <button class="tablinks" onclick="openTab(event, 'ImagesUpload')">ImagesUpload</button>
        <button class="tablinks" onclick="openTab(event, 'Images')">Images</button>

    </div>
    <form action="<?php echo e(route('artupdate',$article->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('put'); ?>
  <!-- Tab content -->
  <div id="Desc" class="tabcontent">
    
        <label for="body">Article Description:</label>
        <textarea style="resize:none;"name="description" id="1" cols="5" rows="5" class='form-control'><?php echo e($article->description); ?></textarea>
  </div>
  
  <div id="Slug&title&category" class="tabcontent">
            <label for="title">Title:</label>
            <input class="form-control" type='text' name='title' value="<?php echo e($article->title); ?>">
            <label for="slug">Slug:</label>
            <input class="form-control" type='text' name='slug' value="<?php echo e($article->slug); ?>">
            <div class="categor">
              <label for="categories">Select Category:</label>
              <select name="categories_id" id="categories">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value=<?php echo e($cat->id); ?>><?php echo e($cat->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
  </div>
  
  <div id="Body" class="tabcontent">
        <label for="body">Article Body:</label>
        <textarea style="resize:none;"name="body" id="1" cols="30" rows="10" class='form-control'><?php echo e($article->body); ?></textarea>
  </div>
  <div class="my-button">
    <button class="btn btn-success" type="submit">Submit</button>
    </form>
  <div id="ImagesUpload" class="tabcontent">
    <?php echo $__env->make('layouts.upload', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  <div id="Images" class="tabcontent">
      <?php $__currentLoopData = $article->artimages()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="thumb-container">
      <img class="thumbnail" src="/images/<?php echo e($image->name); ?>" width="136px" height="100px">
        <div class="thum-opt">
          <h6>Url: <b>/images/<?php echo e($image->name); ?></b></h6>
          <form action="<?php echo e(route('thumbnail',$image->articles_id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <input type="hidden" value="<?php echo e($image->articles_id); ?>" name="articles_id">
            <input type="hidden" value="<?php echo e($image->name); ?>" name="thumbnail">
            <button class="btn btn-danger" type="submit" >Set Thumbnail</button>
          </form>
        <?php if($image->flag==0): ?>
        <img id="thumbnail" class="thumbnail-but" src="/images/Daco_4128718.png" width="15px">
        <?php else: ?> 
        <img id="thumbnail" class="thumbnail-but" src="/images/211716_circle_filled_icon.png" width="15px">
        <?php endif; ?>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

            
            
<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/admin/articles-update.blade.php ENDPATH**/ ?>