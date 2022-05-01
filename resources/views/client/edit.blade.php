@extends('layouts.main')

@section('content')
    <div class="container">
        <h3>Изменение Клиента</h3>
        <hr class="hr-primary"/>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('client.update', $client->id) }}" method="post" class="row g-3">
                        @csrf
                        @method('patch')
                        <div class="col-md-3">
                            <label for="name" class="form-label">Имя</label>
                            <input type="text" name="name" value="{{ $client->name }}" class="form-control" id="name"
                                   placeholder="Имя">
                        </div>
                        <div class="col-md-3">
                            <label for="email" class="form-label">Почта</label>
                            <input type="text" name="email" value="{{ $client->email }}" class="form-control" id="email"
                                   placeholder="Почта">
                        </div>
                        <div class="col-md-3">
                            <label for="city" class="form-label">Город</label>
                            <input type="text" name="city" value="{{ $client->city }}" class="form-control" id="city"
                                   placeholder="Город">
                        </div>
                        <div class="col-md-3">
                            {{--                    // TODO: Надо сделать выпадающий список регионов и брать из таблицы regions? --}}
                            <label for="state" class="form-label">Регион</label>
                            <input type="text" name="state" value="{{ $client->state }}" class="form-control" id="state"
                                   placeholder="Регион">
                        </div>
                        <div class="col-2">
                            <label for="postal_code" class="form-label">Почтовый индекс</label>
                            <input type="text" name="postal_code" value="{{ $client->postal_code }}"
                                   class="form-control" id="postal_code" placeholder="Почтовый индекс">
                        </div>
                        <div class="col-4">
                            <label for="address1" class="form-label">Адрес 1</label>
                            <input type="text" name="address1" value="{{ $client->address1 }}" class="form-control"
                                   id="address1" placeholder="Адрес 1">
                        </div>
                        <div class="col-4">
                            <label for="address2" class="form-label">Адрес 2</label>
                            <input type="text" name="address2" value="{{ $client->address2 }}" class="form-control"
                                   id="address2" placeholder="Адрес 2">
                        </div>
                        <hr class="hr-primary mt-4"/>
                        <div class="mt-4">
                            <div class="shadow p-3 mb-5 bg-body rounded text-end">
                                <a class="btn btn-outline-danger" href="{{ route('client.index') }}">Отменить</a>
                                <button type="submit" class="btn btn-outline-success">Обновить</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>
@endsection
