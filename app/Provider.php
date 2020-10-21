<?php

namespace App;

use App\Notifications\Provider\ProviderResetPassword;
use App\Notifications\Provider\ProviderVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Provider extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name','gender','birthday', 'phone', 'address','email','job','post_code', 'verified', 'image','password','status',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ProviderResetPassword($token));
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new ProviderVerifyEmail);
    }

}
