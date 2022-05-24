<?php

namespace App\Http\Controllers\Task;

use App\DataTables\ClientDataTable;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Task;

class CreateController extends Controller
{
    public function __invoke()
    {
        $clients = Client::all();
        $tasks = Task::all();
        return view('task.create', compact('tasks', 'clients'));
    }
}
