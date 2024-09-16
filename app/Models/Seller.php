<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seller extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'store_name',
        'store_description',
        'logo_url',
        'phone_number',
        'address',
        'city',
        'province',
        'postal_code',
        'country',
        'payment_account',
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan Products
    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // }

    // // Relasi dengan Ads
    // public function ads()
    // {
    //     return $this->hasMany(Ad::class);
    // }
}
