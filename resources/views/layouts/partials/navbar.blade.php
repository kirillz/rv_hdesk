<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home.index') }}">
            <img src="/img/logo.svg" alt="" width="100%" height="60" class="d-inline-block">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-start ms-5" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fs-5 active" aria-current="page" href="{{ route('home.index') }}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('client.index') }}">Клиенты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('invoice.index') }}">Счета</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('task.index') }}">Задачи</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
