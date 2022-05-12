@extends('layouts.main')

@section('content')
    <div class="container">
        <h3>создание Клиента</h3>
        <hr class="hr-primary"/>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('payment.store') }}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-3">
                            <label for="invoice_id" class="form-label">Счет</label>
                            <input type="text" name="invoice_id" class="form-control" id="invoice_id" placeholder="Счет">
                        </div>
                        <div class="col-md-3">
                            <label for="client_id" class="form-label">Источник</label>
                            <input type="text" name="client_id" class="form-control" id="client_id" placeholder="Источник">
                        </div>
                        <div class="col-md-3">
                            <label for="amount" class="form-label">Всего</label>
                            <input type="text" name="amount" class="form-control" id="amount" placeholder="Всего">
                        </div>
                        <div class="col-3">
                            <label for="payment_date" class="form-label">Дата оплаты</label>
                            <input type="text" name="payment_date" class="form-control" id="payment_date" placeholder="Дата">
                        </div>

                        <div class="col-md-2">
                            <label for="is_deleted" class="form-label">Удален?</label>
                            <input type="checkbox" name="is_deleted" class="form-control" id="is_deleted"
                                   placeholder="Удален?">
                        </div>

                        <hr class="hr-primary mt-4"/>
                        <div class="mt-4">
                            <div class="shadow p-3 mb-5 bg-body rounded text-end">
                            <a class="btn btn-outline-danger" href="{{ route('payment.index') }}">Отменить</a>
                            <button type="submit" class="btn btn-outline-dark">Создать</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>


        </div>
    </div>
@endsection
