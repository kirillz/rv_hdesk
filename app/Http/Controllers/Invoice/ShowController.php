<?php

namespace App\Http\Controllers\Invoice;

use App\Models\Client;
use App\Models\Invoice;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ShowController extends Controller
{
    public function __invoke(Invoice $invoice)
    {
        //dd($invoice->name);
        return view('invoice.show', compact('invoice'));
    }

}
