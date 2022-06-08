<?php

namespace App\Http\Controllers\Invoice;

use App\Models\Invoice;
use App\Models\InvoiceStatus;
use Illuminate\Routing\Controller;

class ShowController extends BaseController
{
    public function __invoke(Invoice $invoice, InvoiceStatus $invoiceStatuses)
    {
        //dd($invoice->name);
        $invoiceStatuses = InvoiceStatus::all();
        return view('invoice.show', compact('invoice', 'invoiceStatuses'));
    }
}
