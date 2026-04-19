<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Budget extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'amount',
        'month'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeForMonth($query, $month)
    {
        return $query->where('month', $month);
    }

    public function scopeForCurrentMonth($query)
    {
        return $query->where('month', now()->format('Y-m'));
    }
}
