<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function login()
    {
        return $this->hasOne(Login::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function deliveryAddresses()
    {
        return $this->hasMany(DeliveryAddresse::class);
    }
}
