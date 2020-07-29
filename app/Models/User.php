<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticate implements MustVerifyEmail
{
    //
    public function addresses()
    {
        return $this->hasMany(UserAddress::class);
    }
}
