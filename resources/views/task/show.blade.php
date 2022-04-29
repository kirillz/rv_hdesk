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
            <table class="table table-primary table-hover table-stripped">
                <thead class="table-dark">
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Задача</th>
                    <th scope="col">Описание задачи</th>
                    <th scope="col">Начата</th>
                    <th scope="col">Окончить до</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>№ {{ $task->name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->start_date }}</td>
                    <td>{{ $task->due_date }}</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>

@endsection

{{--@push('scripts')--}}
{{--    {{$dataTable->scripts()}}--}}
{{--@endpush--}}