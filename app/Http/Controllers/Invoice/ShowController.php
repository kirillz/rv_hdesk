<?php

namespace App\Http\Controllers\Invoice;

use App\Models\Invoice;
use Illuminate\Routing\Controller;

class ShowController extends BaseController
{
    public function __invoke(Invoice $invoice)
    {
        //dd($invoice->name);

        return view('invoice.show', compact('invoice'));
    }

}
