<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvoiceStatus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'invoice_statuses';
    protected $guarded = false;

    public function invoice_status(): BelongsTo
    {
        return $this->belongsTo('invoices');
    }


    public static function getIdFromAlias($status): bool|int
    {
        return match ($status) {
            'draft' => INVOICE_STATUS_DRAFT,
            'sent' => INVOICE_STATUS_SENT,
            'viewed' => INVOICE_STATUS_VIEWED,
            'approved' => INVOICE_STATUS_APPROVED,
            'partial' => INVOICE_STATUS_PARTIAL,
            'overdue' => INVOICE_STATUS_OVERDUE,
            'unpaid' => INVOICE_STATUS_UNPAID,
            default => false,
        };
    }
}
