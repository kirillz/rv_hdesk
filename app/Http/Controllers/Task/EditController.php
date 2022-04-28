<?php

namespace App\Http\Controllers\Task;

use App\DataTables\TaskDataTable;
use App\Http\Controllers\Controller;
use App\Models\Task;


class EditController extends Controller
{

        public function __invoke(Task $task)
    {
        $tasks = Task::all();
        return view('task.edit', compact('tasks'));
    }

}
