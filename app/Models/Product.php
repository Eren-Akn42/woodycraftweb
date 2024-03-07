<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}