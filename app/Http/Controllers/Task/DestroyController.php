<?php

namespace App\Http\Controllers\Task;
use App\Models\Task;
use Illuminate\Routing\Controller;


class DestroyController extends Controller
{
    public function __invoke(Task $task): \Illuminate\Http\RedirectResponse
    {
        // TODO: Implement __invoke() method.
        $task->delete();
        return redirect()->route('task.index');
    }
}
