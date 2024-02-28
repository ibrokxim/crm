<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'year',
        'color',
        'fuel_consumption',
        'transmission',
        'number_of_seats',
        'price',
        'number',
    ];

    public function sponsor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
