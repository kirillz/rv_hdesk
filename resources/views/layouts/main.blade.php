<!doctype html>
<html lang="ru">
@include('layouts.partials.head')
<body id="main">

{{--<div id="main">--}}
@include('layouts.partials.navbar')
<div id="mySideBtn" class="sidebtn">
  <a href="#" id="sidebtn" onclick="openNav()"><i class="fa-solid fa-bars"></i></a>
</div>
@include('layouts.partials.sidebar')
<div class="container">
  <div class="row">
    @yield('content')
  </div>
</div> <!-- /container -->

{{--</div>--}}

<script>
  /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
  function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("main").style.marginLeft = "200px";
    setTimeout(() => {
      document.getElementById("mySideBtn").style.visibility = "hidden"; // hide
    }, 3000);

  }

  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    setTimeout(() => {
      document.getElementById("mySideBtn").style.visibility = "visible"; // show
    }, 3000);
  }


</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
