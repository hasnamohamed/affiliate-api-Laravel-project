<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    /** @use HasFactory<\Database\Factories\RateFactory> */
    use HasFactory;
    protected $fillable = [
        'product_id',
        'rate',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
