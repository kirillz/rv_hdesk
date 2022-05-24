<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Requests\Invoice\UpdateRequest;
use App\Models\Invoice;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest  $request, Invoice $invoice)
    {
        $data = $request->validated();
        $this->service->update($invoice, $data);

        return redirect()->route('invoice.show', $invoice->id);
    }
}
