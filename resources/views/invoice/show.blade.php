@extends('layouts.main')

@section('content')
    <div class="mb-4">
        <div class="shadow p-3 mb-5 bg-body rounded">

            <form action="{{ route('invoice.delete', $invoice->id) }}" method="post">
                @csrf
                @method('delete')
                <a class="btn btn-outline-dark" href="{{ route('invoice.index') }}">Назад</a>
                <button type="submit" class="btn btn-outline-danger" href="{{ route('invoice.delete', $invoice->id) }}">
                    Удалить
                </button>
                <a class="btn btn-outline-success" href="{{ route('invoice.edit', $invoice->id) }}">Редактир.</a>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-primary table-hover table-stripped">
                <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Номер счета</th>
                    <th scope="col">Создан</th>
                    <th scope="col">Дата оплаты</th>
                    <th scope="col">Условия оплаты</th>
                    <th scope="col">Удален</th>
                    <th scope="col">Периодич.</th>
                    <th scope="col">Начало работ</th>
                    <th scope="col">Окончание работ</th>
                    <th scope="col">Налог</th>
                    <th scope="col">% по налогу</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Сумма</th>


                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $invoice->id }}</td>
                    <td>Счет № {{ $invoice->invoice_number }}</td>
                    <td>{{ $invoice->invoice_date }}</td>
                    <td>{{ $invoice->due_date }}</td>
                    <td>{{ $invoice->terms }}</td>
                    <td>{{ $invoice->is_deleted > 0 ? 'ДА': 'НЕТ' }}</td>
                    <td>{{ $invoice->is_recurring > 0 ? 'ДА': 'НЕТ' }}</td>
                    <td>{{ $invoice->start_date }}</td>
                    <td>{{ $invoice->end_date }}</td>
                    <td>{{ $invoice->tax_name1 }}</td>
                    <td>{{ $invoice->tax_rate1 }}</td>
                    <td>{{ $invoice->amount }}</td>
                    <td>{{ $invoice->balance }}</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>

@endsection
