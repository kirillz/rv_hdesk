<?php

namespace App\Services\Invoice;

use App\Models\Invoice;
use Illuminate\Support\Facades\DB;

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
        return Invoice::query()->avg('balance');
    }
    public function getInvoicesCount()
    {
        return DB::table('invoices')->count();
    }
}
