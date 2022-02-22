<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-Pannel</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/admin.css') }}" />
</head>
<body>
      @yield('contents')

</body>
<script>
    function openTab(evt, tabName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<script>
  function test()
  {
    console.log('hellow');
  }
</script>
<script>
var dropNone = document.getElementsByClassName("menu-items");
var i;

for (i = 0; i < dropNone.length; i++) {
  dropNone[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
  </script>
  <script>
    function searchSubmit(){
      document.getElementById("searchBar").submit();
    }
    </script>
</html>