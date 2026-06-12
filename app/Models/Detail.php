<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    /** @use HasFactory<\Database\Factories\DetailFactory> */
    use HasFactory;
    protected $fillable = [
        'product_id',
        'detail',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
