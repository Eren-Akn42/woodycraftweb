<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Login extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'logins';
    protected $fillable = ['username', 'password'];
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}