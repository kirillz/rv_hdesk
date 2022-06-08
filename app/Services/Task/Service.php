<?php

namespace App\Services\Task;

use App\Models\Task;
use Illuminate\Support\Facades\DB;

class Service
{
    public function store($data)
    {
        Task::create($data);
    }

    public function update($task, $data)
    {
        $task->update($data);
    }
    public function getTasksSum()
    {
        $task = Task::all();
        return $task->count();
    }
    public function getTasksUnstarted()
    {
        return DB::table('tasks')->whereIn('task_end_date', [0])->count();
    }
    public function getTasksFinished()
    {
        return DB::table('tasks')->where('task_end_date', '>', 0)->count();
    }
}
