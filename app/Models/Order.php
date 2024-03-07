<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function deliveryAddress()
    {
        return $this->belongsTo(DeliveryAddresse::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
