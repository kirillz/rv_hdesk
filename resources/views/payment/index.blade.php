@extends('layouts.main')

@section('content')
{{--    <div class="mb-4">--}}
{{--        <div class="shadow p-3 mb-5 bg-body rounded">--}}
{{--            <a class="btn btn-outline-dark" href="{{ route('client.create') }}">+ Создать</a>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="container">
        <div class="row">
            <h3>Оплаты</h3>
            <hr class="hr-primary"/>
            {{$dataTable->table()}}

        </div>
    </div>

@endsection
@push('scripts')
    {{$dataTable->scripts()}}
@endpush
