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

  private ClientService $clientService;
  private InvoiceService $invoiceService;

  public function __construct(ClientService $clientService, InvoiceService $invoiceService)
  {
    $this->clientService = $clientService;
    $this->invoiceService = $invoiceService;
  }

  public function index(Invoice $invoice, Client $client, ClientService $clientService, InvoiceService $invoiceService)
  {
    $invoice = Invoice::all();
    $client = Client::all();
    $invoiceSum = $this->invoiceService->getBalanceSum();
    $invoiceAvg = $this->invoiceService->getBalanceAvg();
    $clientsCount = $this->clientService->getClientsCount();
    $invoicesCount = $this->invoiceService->getInvoicesCount();

    return view('home', compact('invoiceSum', 'invoiceAvg', 'clientsCount', 'invoicesCount'));
  }
//TODO: тут нужен Chart.js график  линейный с суммой доходов за год месяц неделю день
// TODO: we need 404 page
}
