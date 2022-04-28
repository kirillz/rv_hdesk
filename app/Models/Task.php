<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $guarded = false;

    public function client(): BelongsTo
    {
        return $this->belongsTo('client');
    }
}
