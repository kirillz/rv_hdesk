@extends('layouts.main')

@section('content')
    <div class="container">
        <h3>создание Клиента</h3>
        <div class="row">

            <form action="{{ route('client.store') }}" method="post" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="name" class="form-label">Имя</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Имя">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Почта</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Ваша почта">
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label">Город</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="Город">
                </div>
                <div class="col-12">
                    <label for="address1" class="form-label">Адрес 1</label>
                    <input type="text" name="address1" class="form-control" id="address1" placeholder="Адрес 1">
                </div>
                <div class="col-12">
                    <label for="address2" class="form-label">Адрес 2</label>
                    <input type="text"  name="address2" class="form-control" id="address2" placeholder="Адрес 2">
                </div>
                <div class="col-md-4">
                    <label for="state" class="form-label">Регион</label>
                    <select id="state" class="form-select">
                        <option selected>Выберите...</option>
                        <option>Россия</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="postal_code" class="form-label">Почтовый индекс</label>
                    <input type="text" name="postal_code" class="form-control" id="postal_code" placeholder="Почтовый индекс">
                </div>
                <div class="col-md-4">
                    <label for="account_id" class="form-label">Счет</label>
                    <select class="form-select" id="account_id" aria-label="Счет">
                        @foreach($invoices as $invoice)
                            <option value="{{ $invoice->id }}">{{ $invoice->invoice_number }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Чек ми аут
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-outline-dark">Создать</button>
                </div>
            </form>




        </div>
    </div>
@endsection
