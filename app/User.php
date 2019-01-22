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
        'name', 'email', 'password', 'gender', 'isAdmin','created_at','updated_at' 
    ];

        protected $primariKey = 'id';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function cathegories()
    {
        return $this->hasMany('App\Cathegory');
    }
        
    public function post()
    {
        return $this->hasMany('App\Post');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
