<?php

namespace App\Http\Controllers\Task;

use App\Http\Requests\Task\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('task.index');
    }
}
