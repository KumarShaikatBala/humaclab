<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Registration extends Authenticatable
{
    protected $fillable = [
        'first_name', 'last_name', 'user_name',
        'email', 'password', 'mobile',
        'date_of_birth', 'city','country',
    ];
}
