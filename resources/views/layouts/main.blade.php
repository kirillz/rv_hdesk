<!doctype html>
<html lang="ru">
@include('layouts.partials.head')
<body id="main">

{{--<div id="main">--}}
@include('layouts.partials.navbar')
<div id="mySideBtn" class="sidebtn">
  <a href="#" id="sidebtn" onclick="openNav()"><i class="fa-solid fa-bars"></i></a>
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul class="sidebar_nav">
    <li class="nav-item">
      <a class="nav-link fs-5 active" aria-current="page" href="{{ route('home.index') }}"><i class="fa fa-tachometer"
                                                                                              style="width:46px; padding-right:10px"></i>Главная</a>
    </li>
    <li class="nav-item">
      <a class="nav-link fs-5" href="{{ route('client.index') }}"><i class="fa fa-users"
                                                                     style="width:46px; padding-right:10px"></i>Клиенты</a>
    </li>
    <li class="nav-item">
      <a class="nav-link fs-5" href="{{ route('invoice.index') }}"><i class="fa fa-file-invoice-dollar"
                                                                      style="width:46px; padding-right:8px"></i>Счета</a>
    </li>
    <li class="nav-item">
      <a class="nav-link fs-5" href="{{ route('task.index') }}"><i class="fa-solid fa-list-check"
                                                                   style="width:46px; padding-right:8px"></i>Задачи</a>
    </li>
  </ul>
</div>
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
</body>
</html>
