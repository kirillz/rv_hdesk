
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
