<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Customer as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Customer extends Authenticatable{
    
    use Notifiable;

    protected $fillable = [
        'name', 'last_name','gender','birthday', 'phone', 'address','email','job','post_code', 'verified', 'image','password','status',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'customers';
}
