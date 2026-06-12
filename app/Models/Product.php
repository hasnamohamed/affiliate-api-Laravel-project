<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'total_amount',
        'image',
        'code',
        'commission',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function colors()
    {
        return $this->belongsToMany(
            Color::class,
            'product_colors'
        )->withPivot('amount');
    }

    public function productColors()
    {
        return $this->hasMany(ProductColor::class);
    }

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
}
