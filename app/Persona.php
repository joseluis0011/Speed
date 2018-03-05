<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use SoftDeletes;
    protected $table = 'persona';
    protected $primaryKey = 'idpersona';
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    public function User(){
        return $this->belongsTo('App\User','usuario_idusuario');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($person){
            $person->Notify()->delete();
            $person->Pagos()->delete();
        });
    }

    public function Notify(){
        return $this->hasMany('App\Notificacion','persona_idpersona');
    }

    public function Pagos(){
        return $this->hasMany('App\Pagos','persona_idpersona');
    }

}
