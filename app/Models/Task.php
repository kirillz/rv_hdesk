<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(string[] $item)
 * @method static find(int $int)
 */
class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $guarded = false;

    public function clients(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
