<?php

namespace App\Http\Controllers\Task;

use App\DataTables\TaskDataTable;
use App\Http\Controllers\Controller;
use App\Models\Task;


class StoreController extends Controller
{

        public function __invoke(TaskDataTable $dataTable)
    {
        // TODO: Implement __invoke() method.
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'terms' => 'date',
        ]);
        //dd($data);
        $tasks = Task::all();
        return $dataTable->render('task.index', compact('tasks'));
    }

}
