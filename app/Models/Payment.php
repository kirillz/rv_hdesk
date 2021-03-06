<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'payments';
    protected $guarded = false;

    public function client(): mixed
    {
        return $this->belongsTo(Client::class);
    }
    public function invoice(): mixed
    {
        return $this->belongsTo('invoice');
    }
}
