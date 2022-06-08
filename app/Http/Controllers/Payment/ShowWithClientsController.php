<?php

namespace App\Http\Controllers\Payment;

use App\DataTables\PaymentDataTable;
use App\Models\Client;
use App\Models\Payment;
use Illuminate\Routing\Controller;

class ShowWithClientsController extends BaseController
{
  public function __invoke(PaymentDataTable $dataTable, Client $client)
  {
    //dd($invoice->name);
    $dataTable -> addClient($client);

    $payments = Payment::all();

    return $dataTable->render('payment.index', compact('payments'));
  }
}

