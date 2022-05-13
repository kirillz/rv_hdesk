<?php

namespace App\Http\Controllers\Payment;

use App\Models\Client;
use App\Models\Payment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DestroyController extends BaseController
{
    public function __invoke(Payment $payment): RedirectResponse
    {
        $payment->delete();
        return redirect()->route('payment.index');
    }
}
