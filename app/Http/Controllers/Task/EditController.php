<?php

namespace App\Http\Controllers\Task;

use App\Models\Client;
use App\Models\Task;
use Illuminate\Routing\Controller;


class EditController extends Controller
{

        public function __invoke(Task $task)
    {
        $clients = Client::all();
        return view('task.edit', compact('task', 'clients'));
    }

}
