<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'phone_number',
        'address',
        'city',
        'province',
        'postal_code',
        'country',
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan Orders
    // public function orders()
    // {
    //     return $this->hasMany(Order::class);
    // }
}
