<?php

namespace App\Http\Controllers\Task;

use App\Models\Invoice;
use App\Models\Task;
use Illuminate\Routing\Controller;

class ShowController extends Controller
{
    public function __invoke(Task $task)
    {
        //dd($invoice->name);
        return view('task.show', compact('task'));
    }

}
