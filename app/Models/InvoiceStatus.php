<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvoiceStatus extends Model
{
    use HasFactory;

    protected $table = 'invoice_statuses';
    protected $guarded = false;

    public function invoice_status(): BelongsTo
    {
        return $this->belongsTo('invoices');
    }
}
