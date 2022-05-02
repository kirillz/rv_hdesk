<?php

namespace App\Http\Controllers\Invoice;

use App\Models\Client;
use App\Models\Invoice;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StoreController extends BaseController
{
    public function __invoke()
    {
        $data = request()->validate([
            'invoice_number' => 'string',
            'invoice_date' => 'string',
            'due_date' => 'string',
            'terms' => 'string',
            'is_deleted' => 'integer',
            'is_recurring' => 'integer',
            'start_date' => 'integer',
            'end_date' => 'string',
            'tax_name1' => 'string',
            'tax_rate1' => 'string',
            'amount' => 'string',
            'balance' => 'string',
        ]);
        $this->service->store($data);
        return redirect()->route('invoice.index');
    }

}
