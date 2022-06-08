@extends('layouts.main')

@section('content')
    <div class="container">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
        <h3>создание Счета</h3>
        <div class="row">

            <form action="{{ route('invoice.store') }}" method="post" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="invoice_number" class="form-label">Номер счета</label>
                    <input type="text" name="invoice_number" class="form-control" id="invoice_number" placeholder="Номер счета">
                </div>
              <div class="col-md-6">
                <label for="invoice_status_id" class="form-label">Статус счета</label>
                <select class="form-control form-select" id="invoice_status_id" name="invoice_status_id">
                  <option selected>Выберите статус счета...</option>
                  @foreach($invoiceStatuses as $invoiceStatus)
                    // FIXME: по умолчанию должно стоять значение "draft", см Constants.php INVOICE_STATUS_DRAFT
                    <option
                      value="{{ $invoiceStatus->id }}">{{ $invoiceStatus->name }}</option>
                  @endforeach
                </select>
{{--                <input type="text" name="invoice_status_id" class="form-control" id="invoice_status_id" placeholder="Статус счета">--}}
              </div>
                <div class="col-md-3">
                    <label for="invoice_date" class="form-label">Дата создания</label>
                    <input type="text" name="invoice_date" class="form-control" id="invoice_date" placeholder="Дата создания">
                </div>
                <div class="col-md-3">
                    <label for="pay_due_date" class="form-label">Жел Дата оплаты</label>
                    <input type="text" name="pay_due_date" class="form-control" id="pay_due_date" placeholder="Жел Дата оплаты">
                </div>
                <div class="col-6">
                    <label for="terms" class="form-label">Условия оплаты</label>
                    <input type="text" name="terms" class="form-control" id="terms" placeholder="Условия оплаты">
                </div>
                <div class="col-md-3">
                    <label for="work_start_date" class="form-label">Дата начала</label>
                    <input type="text" name="work_start_date" class="form-control" id="work_start_date" placeholder="Начало">
                </div>
              <div class="col-md-3">
                <label for="work_due_date" class="form-label">Желательно завершить до</label>
                <input type="text" name="work_due_date" class="form-control" id="work_due_date" placeholder="Завершить до">
              </div>
                <div class="col-md-3">
                    <label for="work_end_date" class="form-label">Фактич. завершение раб</label>
                    <input type="text" name="work_end_date" class="form-control" id="work_end_date" placeholder="Фактич. завершение">
                </div>
                <div class="col-md-3">
                    <label for="tax_name1" class="form-label">Название налога</label>
                    <input type="text" name="tax_name1" class="form-control" id="tax_name1" placeholder="Название налога">
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

{{--                <div class="col-md-4">--}}
{{--                    <label for="invoice_id" class="form-label">Счет</label>--}}
{{--                    <select class="form-select" id="invoice_id" aria-label="Счет">--}}
{{--                        @foreach($invoices as $invoice)--}}
{{--                        <option value="{{ $invoice->id }}">{{ $invoice->name }}</option>--}}
{{--                        @endforeach--}}
{{--                </select>--}}
{{--                </div>--}}
                <div class="col-12">
                    <button type="submit" class="btn btn-outline-dark">Создать</button>
{{--                    <a class="btn btn-outline-danger" href="{{ route('invoice.show', $invoice->id) }}">Отменить</a>--}}
                </div>
            </form>




        </div>
    </div>
@endsection


