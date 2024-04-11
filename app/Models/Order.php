<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer_id', 'delivery_addresse_id', 'registered', 'payment_type', 'status', 'session', 'total'];

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
