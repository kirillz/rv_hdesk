<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Invoice;
use App\Services\Invoice\Service as InvoiceService;
use App\Services\Client\Service as ClientService;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class HomeController extends Controller
{
  function getInvoiceBalance($client_id)
  {
    $invoices = Invoice::all('client_id');
    dd($invoices);
    $id = $invoices->getId('$client_id');
    return DB::table('invoices')->where('client_id' . `=` . $id)->sum('balance');
  }


  public function index(Invoice $invoice, Client $client)
  {

    $invoices = Invoice::all();
    $id = $invoices->
    get('$client_id');
    $balance = $this->getInvoiceBalance('id');

    //dump($balance);
    return view('home', compact('invoice', 'balance'));
  }
//TODO: тут нужен Chart.js график  линейный с суммой доходов за год месяц неделю день
// TODO: we need 404 page
}
