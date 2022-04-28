<?php

namespace App\Http\Controllers\Task;
use Illuminate\Http\RedirectResponse;
use App\Models\Client;
use App\Models\Task;
use Illuminate\Routing\Controller;


class StoreController extends Controller
{

        public function __invoke(): RedirectResponse
        {
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'start_date' => 'date',
            'due_date' => 'date',
        ]);

        //dd($data);
        Task::create($data);
        return redirect()->route('task.index');
    }

}
