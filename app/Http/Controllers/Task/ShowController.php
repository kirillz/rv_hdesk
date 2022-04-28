<?php

namespace App\Http\Controllers\Task;

use App\DataTables\TaskDataTable;

use App\Models\Task;
use Illuminate\Routing\Controller;


class ShowController extends Controller
{

        public function __invoke(Task $task)
    {

        return view('task.show', compact('task'));
    }

}
