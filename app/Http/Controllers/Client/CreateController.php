<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Task;
use Illuminate\Routing\Controller;
use App\DataTables\ClientDataTable;

class CreateController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $clients = Client::all();
        $invoices = Invoice::all();
        $tasks = Task::all();
        return view('client.create', compact('clients', 'invoices', 'tasks'));
    }
}
