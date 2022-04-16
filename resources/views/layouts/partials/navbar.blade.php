<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Revive HDESK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('client.index') }}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.index') }}">Клиенты</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Pricing</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link disabled">Disabled</a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</nav>
