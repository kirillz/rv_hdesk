<?php

namespace App\Http\Controllers\Task;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;


class DestroyController extends Controller
{
    public function __invoke(Task $task): RedirectResponse
    {
        $task->delete();
        return redirect()->route('task.index');
    }
}
