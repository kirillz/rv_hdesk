<?php

namespace App\Http\Controllers\Task;

use App\Http\Requests\Task\UpdateRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Task $task): RedirectResponse
    {
        $data = $request->validated();
        $this->service->update($task, $data);
        return redirect()->route('task.show', $task->id);
    }

}
