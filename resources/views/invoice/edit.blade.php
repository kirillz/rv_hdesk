@extends('layouts.main')

@section('content')
    <div class="container">
      @include('layouts.partials.error')
        <h3>Счета</h3>
        <div class="row">

            <form action="{{ route('invoice.update', $invoice->id) }}" method="post" class="row g-3">
                @csrf
                @method('patch')
                <div class="col-md-3">
                    <label for="invoice_number" class="form-label">Номер счета</label>
                    <input type="text" name="invoice_number" value="{{ $invoice->invoice_number }}" class="form-control" id="invoice_number" placeholder="Номер счета">
                </div>
              <div class="col-md-3">
                <label for="invoice_status_id" class="form-label">Статус счета</label>
                <select class="form-control form-select" id="invoice_status_id">
                  <option selected>Выберите статус счета</option>
                  @foreach($invoiceStatuses as $invoiceStatus)
                    <option value="{{ $invoiceStatus->id }}">{{ $invoiceStatus->name }}</option>
                  @endforeach
                </select>
              </div>
                <div class="col-md-3">
                    <label for="invoice_date" class="form-label">Дата создания</label>
                    <input type="text" name="invoice_date" value="{{ $invoice->invoice_date }}" class="form-control" id="invoice_date"  disabled placeholder="Дата создания">
                </div>
                <div class="col-md-3">
                    <label for="pay_due_date" class="form-label">Жел Дата оплаты</label>
                    <input type="text" name="pay_due_date" value="{{ $invoice->pay_due_date }}" class="form-control" id="pay_due_date" placeholder="Дата оплаты">
                </div>
                <div class="col-6">
                    <label for="terms" class="form-label">Условия оплаты</label>
                    <input type="text" name="terms" value="{{ $invoice->terms }}" class="form-control" id="terms" placeholder="Условия оплаты">
                </div>
                <div class="col-md-3">
                    <label for="work_start_date" class="form-label">Дата начала работ</label>
                    <input type="text" name="work_start_date" value="{{ $invoice->work_start_date }}" class="form-control" id="work_start_date" placeholder="Начало">
                </div>
              <div class="col-md-3">
                <label for="work_due_date" class="form-label">Желательно завершить до</label>
                <input type="text" name="work_due_date" value="{{ $invoice->work_due_date }}" class="form-control" id="work_due_date" placeholder="Желательно завершить до">
              </div>
                <div class="col-md-3">
                    <label for="work_end_date" class="form-label">Факт завершения работ</label>
                    <input type="text" name="work_end_date" value="{{ $invoice->work_end_date }}" class="form-control" id="work_end_date" placeholder="Завершение">
                </div>
                <div class="col-md-3">
                    <label for="tax_name1" class="form-label">Название налога</label>
                    <input type="text" name="tax_name1" value="{{ $invoice->tax_name1 }}" class="form-control" id="tax_name1" placeholder="Название налога">
                </div>
                <div class="col-md-3">
                    <label for="tax_rate1" class="form-label">% по налогу</label>
                    <input type="text" name="tax_rate1" value="{{ $invoice->tax_rate1 }}" class="form-control" id="tax_rate1" placeholder="% по налогу">
                </div>
                <div class="col-md-3">
                    <label for="amount" class="form-label">Количество</label>
                    <input type="text" name="amount" value="{{ $invoice->amount }}" class="form-control" id="amount" placeholder="Количество">
                </div>
                <div class="col-md-3">
                    <label for="balance" class="form-label">Остаток средств</label>
                    <input type="text" name="balance" value="{{ $invoice->balance }}" class="form-control" id="balance" placeholder="Остаток средств">
                </div>
              <div class="col-md-3">
                <label for="discount" class="form-label">Скидка %</label>
                <input type="text" name="discount" value="{{ $invoice->discount }}" class="form-control" id="discount" placeholder="Скидка">
              </div>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $invoice->is_deleted }}" id="is_deleted">
                        <label class="form-check-label" for="is_deleted">
                            Помечен на Удаление?
                        </label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"  value="{{ $invoice->is_recurring }}" id="is_recurring">
                        <label class="form-check-label" for="is_recurring">
                            Является периодическим?
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <a class="btn btn-outline-danger" href="{{  route('invoice.index') }}">Отменить</a>
                    <button type="submit" class="btn btn-outline-success">Обновить</button>

                </div>
            </form>




        </div>
    </div>
@endsection
