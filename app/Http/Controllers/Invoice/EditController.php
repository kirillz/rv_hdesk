<?php

namespace App\Http\Controllers\Invoice;

use App\Models\Invoice;
use App\Models\InvoiceStatus;
use Illuminate\Routing\Controller;

class EditController extends BaseController
{
    public function __invoke(Invoice $invoice, InvoiceStatus $invoiceStatus)
    {
        // dd($invoice->name);
        $invoiceStatuses = InvoiceStatus::all();
        return view('invoice.edit', compact('invoice', 'invoiceStatuses'));
    }
}
