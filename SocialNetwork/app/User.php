<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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

    public function messages() {
        return $this->hasMany('App\Messages','user_id','id');
    }
    public function notifications() {
        return $this->hasMany('App\Notifications','user_id','id');
    }
    public function albums() {
        return $this->hasMany('App\Album','user_id','id');
    }
    public function contact() {
        return $this->hasOne('App\Contact','user_id','id');
    }
    public function map() {
        return $this->hasOne('App\Maps','user_id','id');
    }
}
