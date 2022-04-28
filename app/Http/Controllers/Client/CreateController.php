<?php

namespace App\Http\Controllers\Client;

use App\Models\Invoice;
use Illuminate\Routing\Controller;
use App\DataTables\ClientDataTable;

class CreateController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $invoices = Invoice::all();
        return view('client.create', compact('invoices'));
    }
}
