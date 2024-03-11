<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryAddresse extends Model
{
    protected $fillable = [
        'forename', 'surname', 'add1', 'add2', 'add3', 'postcode', 'phone', 'email'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
