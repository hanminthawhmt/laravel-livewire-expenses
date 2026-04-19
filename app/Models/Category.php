<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name',
        'type',
        'color',
        'icon',
        'is_default',
        'user_id',
    ];

    public function transactions() : HasMany
    {
        $this->hasMany(Transaction::class);
    }
}
