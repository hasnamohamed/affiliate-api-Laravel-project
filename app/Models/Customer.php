<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;
    protected $fillable = [
        'full_name',
        'phone',
        'whats_number',
        'governate_id',
        'city_id',
        'address',
        'mark',
        'page_id',
        'note',
        'employee',
        'user_id',
    ];

    public function governate()
    {
        return $this->belongsTo(Governate::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
