@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <table class="table table-primary table-hover table-stripped">
                <thead class="table-dark">
                <tr>
                    <th scope="col">Счет</th>
                    <th scope="col">Источник</th>
                    <th scope="col">Всего</th>
                    <th scope="col">Дата оплаты</th>
                    <th scope="col">Статус Удален</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $payment->invoice_id }}</td>
                    <td>{{ $payment->client_id }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>{{ $payment->payment_date }}</td>
                    <td>{{ $payment->is_deleted }}</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
    <div class="mb-4">
        <div class="shadow p-3 mb-5 bg-body rounded text-end">
            <form action="{{ route('payment.delete', $payment->id) }}" method="post">
                @csrf
                @method('delete')
                <a class="btn btn-outline-dark" href="{{ route('payment.index') }}">Назад</a>
                <button type="submit" class="btn btn-outline-danger" href="{{ route('payment.delete', $payment->id) }}">
                    Удалить
                </button>
                <a class="btn btn-outline-success" href="{{ route('payment.edit', $payment->id) }}">Редактир.</a>
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
