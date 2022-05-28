<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\InvoiceStatus;
use App\Models\Task;
use App\Services\Invoice\Service as InvoiceService;
use App\Services\Client\Service;
use App\Services\Task\Service as TaskService;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    private Service $service;
    private InvoiceService $invoiceService;
    private InvoiceStatus $invoiceStatus;
    private TaskService $taskService;

    public function __construct(Service $service, InvoiceService $invoiceService, InvoiceStatus $invoiceStatus, TaskService $taskService)
    {
        $this->service = $service;
        $this->invoiceService = $invoiceService;
        $this->invoiceStatus = $invoiceStatus;
        $this->taskService = $taskService;
    }

    public function index(Invoice $invoice, Client $client, Service $service, InvoiceService $invoiceService, InvoiceStatus $invoiceStatus)
    {
        $invoiceSum = $this->invoiceService->getBalanceSum();
        $invoiceAvg = $this->invoiceService->getBalanceAvg();
        $clientsCount = $this->service->getClientsCount();
        $invoicesCount = $this->invoiceService->getInvoicesCount();
        $invoiceStatusApproved = $this->invoiceService->getApprovedSum();
        $invoiceStatusUnpaid = $this->invoiceService->getUnpaidSum();
        $getTasksUnstarted = $this->taskService->getTasksUnstarted();
        $getTasksSum = $this->taskService->getTasksSum();
        $getTasksFinished = $this->taskService->getTasksFinished();


        return view('home', compact('invoiceSum', 'invoiceAvg', 'clientsCount', 'invoicesCount', 'invoiceStatusApproved', 'invoiceStatusUnpaid', 'getTasksUnstarted', 'getTasksSum', 'getTasksFinished'));
    }
    //TODO: тут нужен Chart.js график  линейный с суммой доходов за год месяц неделю день
// TODO: we need 404 page
}
