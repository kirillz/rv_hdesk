<?php

namespace App\Http\Controllers\Invoice;

use App\DataTables\InvoiceDataTable;
use App\Models\Client;
use App\Models\Invoice;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function __invoke(InvoiceDataTable $dataTable)
    {
        $invoices = Invoice::all();
        return $dataTable->render('invoice.index', compact('invoices'));
    }

}