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
}
