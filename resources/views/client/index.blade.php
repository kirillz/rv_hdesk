@extends('layouts.main')

@section('content')
    <div class="mb-4">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <a class="btn btn-outline-dark" href="{{ route('client.create') }}">+ Создать</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($clients as $client)
                <div><a href="{{ route('client.show', $client->id) }}">{{ $client->id }}. {{ $client->name }}</a></div>
            @endforeach
        </div>
    </div>

@endsection
