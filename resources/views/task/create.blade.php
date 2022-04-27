@extends('layouts.main')

@section('content')
    <div class="container">
        <h3>создание Задачи</h3>
        <div class="row">

            <form action="{{ route('task.store') }}" method="post" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="name" class="form-label">Название задачи</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name Task">
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label">Описание задачи</label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Description">
                </div>




                        @foreach($tasks as $task)
                            <option value="{{ $tasks->id }}">{{ $task->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Чек ми ау
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
