<?php

namespace App\Services\Payment;

use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class Service
{
    public function store($data)
    {
        Payment::create($data);
    }
    public function update($payment, $data)
    {
        $payment->update($data);
    }
    public function getBalanceSum()
    {
        $payment = Payment::all('balance');
        return $payment->sum('balance');
    }
    public function getBalanceAvg()
    {
        $payment = Payment::all('balance');
        //dd($invoice);
        return $payment->collect()->avg('balance');
    }
    public function getInvoicesCount()
    {
        return DB::table('payments')->count();
    }
}
