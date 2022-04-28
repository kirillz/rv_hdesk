<?php

namespace App\Http\Controllers;

use App\DataTables\ClientDataTable;
use App\Models\Task;


class TaskController extends Controller
{

        public function index(ClientDataTable $dataTable)
    {
        $tasks = Task::all();
        return $dataTable->render('task.index');
    }
    public function create()
    {
        $task = Task::all();
        return view('task.create', compact('task'));
    }
}
