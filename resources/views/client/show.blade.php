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
{{--        {!! Form::tab_link('#activity', true) !!}--}}
{{--        @if ($hasTasks)--}}
{{--          {!! Form::tab_link('#tasks', trans('texts.tasks')) !!}--}}
{{--        @endif--}}
{{--        @if ($hasExpenses)--}}
{{--          {!! Form::tab_link('#expenses', trans('texts.expenses')) !!}--}}
{{--        @endif--}}
{{--        @if ($hasQuotes)--}}
{{--          {!! Form::tab_link('#quotes', trans('texts.quotes')) !!}--}}
{{--        @endif--}}
{{--        @if ($hasRecurringInvoices)--}}
{{--          {!! Form::tab_link('#recurring_invoices', trans('texts.recurring')) !!}--}}
{{--        @endif--}}
        <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#">Активность</a>
        <a class="flex-sm-fill text-sm-center nav-link" href='{{ route('invoice.show_with_clients', $client) }}'>Счета</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="#">Оплаты</a>
        <a class="flex-sm-fill text-sm-center nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Отключенная</a>
      </nav>
    </div>
  </div>


@endsection
