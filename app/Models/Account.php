<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'accounts';
    protected $guarded = false;
    public function client() {
        $this->belongsTo(Client::class, 'account_id', 'id');
    }
}
