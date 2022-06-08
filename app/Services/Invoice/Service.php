<?php

namespace App\Services\Invoice;

use App\Models\Invoice;
use App\Models\InvoiceStatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class Service
{
    public function store($data)
    {
        Invoice::create($data);
    }
    public function update($invoice, $data)
    {
        $invoice->update($data);
    }
    public function getBalanceSum()
    {
        $invoice = Invoice::all('balance');
        return $invoice->sum('balance');
    }
    public function getBalanceAvg()
    {
        return DB::table('invoices')
        ->avg('balance');
    }
    public function getInvoicesCount(): int
    {
        return DB::table('invoices')->count();
    }

    public function getApprovedSum(): int
    {
        return DB::table('invoices')->whereIn('invoice_status_id', [4])->count();
    }

    public function getUnpaidSum(): int
    {
        return DB::table('invoices')->whereIn('invoice_status_id', [-2])->count();
    }
    public function getStatusNameById($id)
    {
        return DB::table('invoice_statuses')->where('id', $id);
    }
}
