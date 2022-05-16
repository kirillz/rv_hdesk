@extends('layouts.main')

@section('content')
  <div class="container">
    @include('layouts.partials.error')
    <div class="row">

      <form action="{{ route('task.update', $task->id) }}" method="post" class="row g-3">
        @csrf
        @method('patch')
        <div class="col-md-6">
          <label for="name" class="form-label">Название задачи</label>
          <input type="text" value="{{ $task->name }}" name="name" class="form-control" id="name"
                 placeholder="Назовите задачу">
        </div>
        <div class="col-md-2">
          <label for="start_date" class="form-label">Начало задачи</label>
          <input type="date" value="{{ $task->start_date }}" name="start_date" class="form-control"
                 id="start_date"
                 placeholder="Выполнить до">
        </div>
        <div class="col-md-2">
          <label for="due_date" class="form-label">Сделать до:</label>
          <input type="date" value="{{ $task->due_date }}" name="due_date" class="form-control" id="due_date"
          placeholder="Выполнить до">
        </div>
        <div class="col-md-6">
          <label for="description" class="form-label">Описание задачи:</label>
            <textarea type="text" id="description" name="description" class="form-input form-text form-control"  rows="3" value="{{ $task->description }}"
            placeholder="Опишите задачу...">{{ $task->description }}</textarea>
        </div>
        <div class="col-md-4">
          <label for="client_id" class="form-label">Задача для клиента</label>
          <select class="form-select" id="client_id" aria-label="Для клиента">
            @foreach($clients as $client)
              <option id="client_id" value="{{ $client->task_id }}">{{ $client->name }}</option>
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
