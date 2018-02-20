<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    protected $table = 'pagos';
    protected $primaryKey = 'idpagos';
    public $timestamps = false;

    public function Persona(){
       return $this->belongsTo('App\Persona','persona_idpersona');
    }
}
