<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create(string[] $item)
 * @method static find(int $int)
 */
class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'client';
    protected $guarded = false;

    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class);
    }
}
