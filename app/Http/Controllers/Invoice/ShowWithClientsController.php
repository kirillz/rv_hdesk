<?php

namespace App\Http\Controllers\Invoice;

use App\DataTables\InvoiceDataTable;
use App\Models\Client;
use App\Models\Invoice;

use Illuminate\Routing\Controller;

class ShowWithClientsController extends BaseController
{
    public function __invoke(InvoiceDataTable $dataTable, Client $client)
    {
        $invoices = Invoice::all();

        $dataTable->addClient($client);

        return $dataTable->render('invoice.index', compact('invoices'));
    }
}
