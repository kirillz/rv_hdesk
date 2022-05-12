<?php

namespace App\Http\Controllers\Payment;

use App\Models\Client;
use App\Models\Payment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UpdateController extends BaseController
{
    public function __invoke(Payment $payment)
    {
        $data = request()->validate([
          'invoice_id' => 'string',
          'client_id' => 'string',
          'amount' => 'string',
          'payment_date' => 'string',
          'is_deleted' => 'integer',
        ]);
        $this->service->update($payment, $data);

        return redirect()->route('payment.show', $payment->id);
    }
}
