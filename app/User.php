<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;


class User extends Authenticatable
{
    use Notifiable;

   use EntrustUserTrait;

protected $table = 'users';

    protected $fillable = [
        'name_user', 'email','nip','username','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function roles ()
    {
        return $this->belongsToMany('App\Role');
    }

    public function roleuser ()
    {
        return $this->hasMany('App\RoleUser','user_id','id');
    }
}
