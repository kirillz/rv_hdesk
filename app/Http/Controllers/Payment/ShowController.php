<?php

namespace App\Http\Controllers\Payment;

use App\Models\Payment;
use Illuminate\Routing\Controller;

class ShowController extends BaseController
{
    public function __invoke(Payment $payment)
    {
        //dd($invoice->name);

        return view('payment.show', compact('payment'));
    }
}
