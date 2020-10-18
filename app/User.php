<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    
    public $table = "user";
    //nombro la llave primaria de la tabla de referencia
    protected $primaryKey = 'iduser';

    //desactivo los campos que se adiccionan como el "created_at y el updated_at"
    public $timestamps=false;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     
    protected $hidden = [
        'password', 'remember_token',
    ];
    */

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    */
}
