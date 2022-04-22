@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">

            <form action="{{ route('invoice.update', $invoice->id) }}" method="post" class="row g-3">
                @csrf
                @method('patch')
                <div class="col-md-6">
                    <label for="invoice_number" class="form-label">Номер счета</label>
                    <input type="text" name="invoice_number" class="form-control" id="invoice_number" placeholder="Номер счета">
                </div>
                <div class="col-md-3">
                    <label for="invoice_date" class="form-label">Дата создания</label>
                    <input type="text" name="invoice_date" class="form-control" id="invoice_date" placeholder="Дата создания">
                </div>
                <div class="col-md-3">
                    <label for="due_date" class="form-label">Дата оплаты</label>
                    <input type="text" name="due_date" class="form-control" id="due_date" placeholder="Дата оплаты">
                </div>
                <div class="col-6">
                    <label for="terms" class="form-label">Условия оплаты</label>
                    <input type="text" name="terms" class="form-control" id="terms" placeholder="Условия оплаты">
                </div>
                <div class="col-md-3">
                    <label for="start_date" class="form-label">Дата начала</label>
                    <input type="text" name="start_date" class="form-control" id="start_date" placeholder="Начало">
                </div>
                <div class="col-md-3">
                    <label for="end_date" class="form-label">Дата завершения</label>
                    <input type="text" name="end_date" class="form-control" id="end_date" placeholder="Завершение">
                </div>
                <div class="col-md-3">
                    <label for="end_date" class="form-label">Название налога</label>
                    <input type="text" name="end_date" class="form-control" id="end_date" placeholder="Название налога">
                </div>
                <div class="col-md-3">
                    <label for="tax_rate1" class="form-label">% по налогу</label>
                    <input type="text" name="tax_rate1" class="form-control" id="tax_rate1" placeholder="% по налогу">
                </div>
                <div class="col-md-3">
                    <label for="amount" class="form-label">Количество</label>
                    <input type="text" name="amount" class="form-control" id="amount" placeholder="Количество">
                </div>
                <div class="col-md-3">
                    <label for="balance" class="form-label">Остаток средств</label>
                    <input type="text" name="balance" class="form-control" id="balance" placeholder="Остаток средств">
                </div>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="is_deleted">
                        <label class="form-check-label" for="is_deleted">
                            Помечен на Удаление?
                        </label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="is_recurring">
                        <label class="form-check-label" for="is_recurring">
                            Является периодическим?
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <a class="btn btn-outline-danger" href="{{ route('invoice.show', $invoice->id) }}">Отменить</a>
                    <button type="submit" class="btn btn-outline-success">Обновить</button>

                </div>
            </form>




        </div>
    </div>
@endsection
