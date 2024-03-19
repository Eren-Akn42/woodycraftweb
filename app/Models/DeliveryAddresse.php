<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deliveryaddresse extends Model
{
    protected $fillable = [
        'forename', 'surname', 'add1', 'add2', 'add3', 'postcode', 'phone', 'email'
    ];
}
