@extends('layouts.main')

@section('content')
    <div class="container">
        <h3>создание Задачи</h3>
        <div class="row">

            <form action="{{ route('task.store') }}" method="post" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="name" class="form-label">Название задачи</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Назовите задачу">
                </div>
                <div class="col-md-2">
                    <label for="start_date" class="form-label">Начало задачи</label>
                    <input type="datetime-local" name="start_date" class="form-control" id="start_date"
                           placeholder="Выполнить до">
                </div>
                <div class="col-md-2">
                    <label for="due_date" class="form-label">Сделать до:</label>
                    <input type="datetime-local" name="due_date" class="form-control" id="due_date"
                           placeholder="Выполнить до">
                </div>
                <div class="col-md-6">
                    <label for="description" class="form-label">Описание задачи</label>
                    <textarea class="form-control" id="description" rows="3" placeholder="Опишите задачу..."></textarea>
                    </textarea>
                </div>
                <div class="col-md-4">
                    <label for="client_id" class="form-label">Задача для клиента</label>
                    <select class="form-select" id="client_id" aria-label="Для клиента">
                        @foreach($clients as $client)
                            <option value="{{ $client->task_id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Чени мну
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <a class="btn btn-outline-danger" href="{{ route('task.index') }}">Отменить</a>
                    <button type="submit" class="btn btn-outline-dark">Создать</button>
                </div>
            </form>


        </div>
    </div>
@endsection
