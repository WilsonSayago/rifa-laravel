<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'type','name','phone','referido'
    ];

    public function purchases()
    {
        return $this->hasMany('App\Purchase','id_user');
    }
    public function bankaccounts()
    {
        return $this->hasMany('App\BankAccount', 'id_user');
    }
    public function setPasswordAttribute($password){
        $this->attributes['password'] = \Hash::make($password);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'type','password', 'remember_token',
    ];

    public function admin(){
        return $this->type === 'admin';
    }
}
