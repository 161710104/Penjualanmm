<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
class User extends Authenticatable
{
    use LaratrustUserTrait;
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


    public function Berita()
    {
    return $this->hasMany('App\Berita','user_id');
    }

    public function Mobil()
    {
  // Setiap user akan memiliki banyak data
    return $this->hasMany('App\Mobil','user_id');
    }

    public function Detail_mobil()
    {
  // Setiap user akan memiliki banyak data
    return $this->hasMany('App\Detail_mobil','user_id');
    }

}
