<?php

namespace App\Http\Controllers\Task;

use App\DataTables\TaskDataTable;
use App\Http\Controllers\Controller;
use App\Models\Task;


class UpdateController extends Controller
{

        public function __invoke(Task $task)
    {
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'terms' => 'date',
        ]);
        $task->update($data);
        return redirect()->route('task.show', $task->id);
    }

}
