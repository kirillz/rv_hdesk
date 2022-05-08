@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <table class="table table-primary table-hover table-stripped">
                <thead class="table-dark">
                <tr>
                    <th scope="col">Выбрать</th>
                    <th scope="col">ID</th>
                    <th scope="col">Клиент</th>
                    <th scope="col">Почта</th>
                    <th scope="col">Адрес</th>
                    <th scope="col">Город</th>
                    <th scope="col">Индекс</th>
                    <th scope="col">ID счета</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $client->is_selected }}</td>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->address1 }}</td>
                    <td>{{ $client->city }}</td>
                    <td>{{ $client->postal_code }}</td>
                    <td>{{ $client->invoice_id }}</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
    <div class="mb-4">
        <div class="shadow p-3 mb-5 bg-body rounded text-end">
            <form action="{{ route('client.delete', $client->id) }}" method="post">
                @csrf
                @method('delete')
                <a class="btn btn-outline-dark" href="{{ route('client.index') }}">Назад</a>
                <button type="submit" class="btn btn-outline-danger" href="{{ route('client.delete', $client->id) }}">
                    Удалить
                </button>
                <a class="btn btn-outline-success" href="{{ route('client.edit', $client->id) }}">Редактир.</a>
            </form>
        </div>
    </div>
  <div class="mb-4">
    <div class="shadow p-3 mb-5 bg-body rounded text-end">
      <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#">Активная</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="#">Длинная ссылка навигации</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="#">Ссылка</a>
        <a class="flex-sm-fill text-sm-center nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Отключенная</a>
      </nav>
    </div>
  </div>

@endsection
