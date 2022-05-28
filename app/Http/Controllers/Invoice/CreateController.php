<?php

namespace App\Http\Controllers\Invoice;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\InvoiceStatus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $invoice = Invoice::all();
        $invoiceStatuses = InvoiceStatus::all();
        return view('invoice.create', compact('invoice', 'invoiceStatuses'));
    }
}
