<?php

namespace App\Http\Controllers\Payment;

use App\DataTables\PaymentDataTable;

use App\Models\Payment;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
  public function __invoke(PaymentDataTable $dataTable, Request $request)
  {
    //
    $payments = Payment::all();
    return $dataTable->render('payment.index', compact('payments'));
  }
}
