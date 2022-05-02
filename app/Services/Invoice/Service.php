<?php

namespace App\Services\Invoice;

use App\Models\Invoice;

class Service
{
  public function store($data) {
    //dd($data);
    Invoice::create($data);
  }
  public function update($invoice, $data) {
    //dd($data);
    $invoice->update($data);
  }
}
