<!doctype html>
<html lang="ru">
@include('layouts.partials.head')
<body>
@include('layouts.partials.navbar')
<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div> <!-- /container -->
</body>
</html>
