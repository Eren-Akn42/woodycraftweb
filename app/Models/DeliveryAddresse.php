<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryAddresse extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}