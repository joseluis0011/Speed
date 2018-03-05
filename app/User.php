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
    protected $table = 'usuario';

    protected $primaryKey = 'idusuario';

    public $timestamps = false;

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Persona(){
     return $this->hasMany('App\Persona','usuario_idusuario');
    }

    public function Config(){
        return $this->hasMany('App\Config','iduser');
    }
}
