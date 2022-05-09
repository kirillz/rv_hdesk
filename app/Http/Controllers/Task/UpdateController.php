<?php

namespace App\Http\Controllers\Task;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

class UpdateController extends Controller
{
    public function __invoke(Task $task): RedirectResponse
    {
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'start_date' => 'date',
            'due_date' => 'date',
        ]);
        $task->update($data);
        return redirect()->route('task.show', $task->id);
    }
}
