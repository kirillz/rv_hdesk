@extends('layouts.main')

@section('content')
    <div class="mb-4">
        <div class="shadow p-3 mb-5 bg-body rounded">

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
    <div class="container">
        <div class="row">
            {{$dataTable->table()}}

        </div>
    </div>

@endsection

@push('scripts')
    {{$dataTable->scripts()}}
@endpush