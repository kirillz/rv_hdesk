<?php

namespace App\Http\Controllers\Payment;

use App\DataTables\PaymentDataTable;
use App\Models\Payment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(PaymentDataTable $dataTable, Request $request)
    {
        //
        $payments = Payment::all();
        return $dataTable->render('payment.index', compact('payments'));
    }
}
