<?php

namespace App\Http\Controllers\Payment;


class StoreController extends BaseController
{
    public function __invoke()
    {
        $data = request()->validate([
            'invoice_id' => 'string',
            'client_id' => 'string',
            'amount' => 'string',
            'payment_date' => 'string',
            'is_deleted' => 'integer',
        ]);
        $this->service->store($data);
        return redirect()->route('payment.index');
    }
}
