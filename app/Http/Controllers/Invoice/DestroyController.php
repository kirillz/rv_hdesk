<?php

namespace App\Http\Controllers\Invoice;

use App\Models\Client;
use App\Models\Invoice;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DestroyController extends BaseController
{
    public function __invoke(Invoice $invoice): RedirectResponse
    {
        $invoice->delete();
        return redirect()->route('invoice.index');
    }
}
