<?php

namespace App\Http\Controllers\Invoice;

use App\DataTables\InvoiceDataTable;
use App\Models\Invoice;

use Illuminate\Routing\Controller;

class IndexController extends BaseController
{
    public function __invoke(InvoiceDataTable $dataTable)
    {
        $invoices = Invoice::all();
        return $dataTable->render('invoice.index', compact('invoices'));
    }
}
