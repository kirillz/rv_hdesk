<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create(string[] $item)
 * @method static find(int $int)
 */
class Invoice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'invoices';
    protected $guarded = false;

}
