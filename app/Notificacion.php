<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'notificaciones';
    protected $primaryKey = 'idnotificaciones';
    public $timestamps = false;

    public function Persona(){
        return $this->belongsTo('App\Persona','persona_idpersona');
    }
}
