<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['forename', 'surname', 'add1', 'add2', 'add3', 'postcode', 'phone', 'email', 'registered'];

    public function login()
    {
        return $this->hasOne(Login::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
