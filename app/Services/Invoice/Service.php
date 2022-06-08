<?php

namespace App\Services\Invoice;

use App\Models\Invoice;
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
    public function getStatusNameById($id)
    {
        return DB::table('invoice_statuses')->where('id', $id)->first();
    }
}
