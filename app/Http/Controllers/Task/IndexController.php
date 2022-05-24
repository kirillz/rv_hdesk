<?php

namespace App\Http\Controllers\Task;

use App\DataTables\TaskDataTable;
use App\Http\Controllers\Controller;
use App\Models\Task;

class IndexController extends Controller
{
    public function __invoke(TaskDataTable $dataTable)
    {
        $tasks = Task::all();
        return $dataTable->render('task.index', compact('tasks'));
    }
}
