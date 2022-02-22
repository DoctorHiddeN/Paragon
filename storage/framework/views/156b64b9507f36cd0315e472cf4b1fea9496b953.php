<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paragon</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/css/app.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/css/bootstrap.min.css')); ?>" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon"   href="images/logo.png">
</head>
<body>
 
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('contents'); ?>
</body>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
  $('#reload').click(function () {
      $.ajax({
          type: 'GET',
          url: 'reload-captcha',
          success: function (data) {
              $(".captcha span").html(data.captcha);
          }
      });
  });

</script>
<script>
  function openSearch() {
  document.getElementById("search-bar").style.width = "20%";
  document.getElementById("search-input").style.width = "150px";
}
</script>
<script>
  const txts=document.querySelector(".displayer_items").children,
  txtsLen=txts.length;
  let index=0;
  const textInTimer=3000,
        textOutTimer=2800;

  function animateText(){
    for(let i=0; i<txtsLen;i++){
      txts[i].classList.remove("text-in","text-out")
    }
      txts[index].classList.add("text-in");
      setTimeout(function(){
        txts[index].classList.add("text-out");
      },textOutTimer)
      setTimeout(function(){
        if(index == txtsLen-1){
        index=0;
      }
      else{
        index++;
      }
      animateText();
      },textInTimer);

  }
  window.onload=animateText;
  </script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="public/js/popper.min.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
</html>
<?php /**PATH C:\Users\Hady\Desktop\Paragon\resources\views/layouts/master.blade.php ENDPATH**/ ?>