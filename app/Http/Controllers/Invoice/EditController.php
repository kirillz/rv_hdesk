<?php

namespace App\Http\Controllers\Invoice;

use App\Models\Invoice;
use Illuminate\Routing\Controller;

class EditController extends BaseController
{
    public function __invoke(Invoice $invoice)
    {
        // dd($invoice->name);
        return view('invoice.edit', compact('invoice'));
    }
}
