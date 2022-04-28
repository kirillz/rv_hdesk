@extends('layouts.main')

@section('content')
    <div class="mb-4">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <form action="{{ route('task.delete', $task->id) }}" method="post">
                @csrf
                @method('delete')
                <a class="btn btn-outline-dark" href="{{ route('task.index') }}">Назад</a>
                <button type="submit" class="btn btn-outline-danger" href="{{ route('task.delete', $task->id) }}">
                    Удалить
                </button>
                <a class="btn btn-outline-success" href="{{ route('task.edit', $task->id) }}">Редактир.</a>
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