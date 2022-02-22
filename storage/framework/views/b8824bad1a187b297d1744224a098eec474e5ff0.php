
<?php $__env->startSection('contents'); ?>

<?php echo $__env->make('layouts.admin-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="admin-main">
    <div class="ad_top_nav">
        <div class="right-top-nav">
            <a href="#"><img src="/images/clipart4349876.png" alt="profile" width="40px" alt="profile" id="profile"></a>
            <a href="#"><img src="/images/phone-settings-setting-icon-292044.png" alt="setting" width="40px" id="setting">
            <a href=#  id="userimg"><img src="/images/<?php echo e(auth()->user()->avatar); ?>" width="45px" id="avatar"></a>
            <h6> <?php echo e(auth()->user()->name); ?> </h6>
        </div>
        <div class="left-top-nav">
            <img src="/images/search_icon_152764.png" onclick="searchSubmit()" width="30px" height="30px">
            <form id="searchBar" action="#" method="post">
                <?php echo csrf_field(); ?>
                <input type="text" name="admindashboard" id="dashsearch" placeholder="Search Dashboard" style="border:0 white;">
            </form>
        </div>
    </div>
    <h3>Hellow i am admin </h2>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/admin/pannel.blade.php ENDPATH**/ ?>