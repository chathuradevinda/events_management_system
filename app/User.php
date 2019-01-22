<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'nic','category','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';
    protected $primaryKey = 'id';

    public function event(){
        return $this->hasMany('App\Event');
    }

    public function preferences(){
        return $this->hasMany('App\Preferences');
    }

    public function event_approval(){
        return $this->hasMany('App\EventApproval');
    }
}
 