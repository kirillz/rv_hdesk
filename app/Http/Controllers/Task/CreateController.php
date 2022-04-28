<?php

namespace App\Http\Controllers\Task;

use App\DataTables\ClientDataTable;
use App\Http\Controllers\Controller;
use App\Models\Task;


class CreateController extends Controller
{

        public function __invoke()
    {
        $tasks = Task::all();
        return view('task.create', compact('tasks'));
    }

}
