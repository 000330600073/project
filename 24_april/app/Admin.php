<?php

namespace App;

use App\Notifications\AdminResetPasswordNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password',];
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }

    //
}
