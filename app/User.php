<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Messages()
    {
        return $this->hasMany('App\Message');
    }

    public function getUnreadMessagesCountAttribute()
    {
        return $this->Messages()->where('type', '=', 'inbox')->where('read', '=', null)->count();
    }

    public function Logs()
    {
        return $this->hasMany('App\Log');
    }
}
