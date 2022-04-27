@extends('layouts.main')

@section('content')
{{--    <div class="mb-4">--}}
{{--        <h3>Счета</h3>--}}
{{--        <div class="shadow p-3 mb-5 bg-body rounded">--}}
{{--            <a class="btn btn-outline-dark" href="{{ route('invoice.create') }}">+ Создать</a>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="container">
        <div class="row">
            <h3>Счета</h3>
            {{$dataTable->table()}}

{{--            @foreach($invoices as $invoice)--}}
{{--                <div>Счет {{ $invoice->id }} № <a href="{{ route('invoice.show', $invoice->id) }}"> {{ $invoice->invoice_number}}</a></div>--}}
{{--            @endforeach--}}
        </div>
    </div>

@endsection
@push('scripts')
    {{$dataTable->scripts()}}
@endpush