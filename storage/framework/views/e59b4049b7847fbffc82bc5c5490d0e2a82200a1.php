<div id="mySidenav" class="ms sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#"><img id="dashboard" src="/images/monitor_dashboard_icon_136391.png">Pannel</a>
    <a href="#"><img id="bookmark" src="/images/PikPng.com_bookmark-icon-png_5779326.png">Bookmarks</a>
    <form method="post" action="<?php echo e(route('logout')); ?>">
      <?php echo csrf_field(); ?>
      <input type="submit" name="logout" id="logout" value="Logout">
    </form>
  </div>
  
  <!-- Use any element to open the sidenav -->
  <span class="nav_bot" onclick="openNav()"><img src="/images/PinClipart.com_menu-clip-art_5328945.png" width="20px"></span><?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/layouts/sidenav.blade.php ENDPATH**/ ?>