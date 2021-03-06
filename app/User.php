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
        'name', 'email', 'password','phone_num','address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     protected $rules = [
    'email' => 'sometimes|required|email|unique:users',
    'name' => 'require|max:10|min:5',
    'address' =>'require|min:4'|'max:255',
    'phone_num' =>'require|min:11|unique:users',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public $table = "users";

    public function reservation()
    {
        return $this->hasMany('App\Reservation');
    }

    public function feedback()
    {
        return $this->hasMany('App\Feedback');
    }

    public function bill()
    {
        return $this->hasMany('App/Bill');
    }
}
