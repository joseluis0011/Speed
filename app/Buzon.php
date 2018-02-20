<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buzon extends Model
{
    protected $table = 'buzon';
    protected $primaryKey = 'idbuzon';
    public $timestamps = false;

    public function Notify(){
        return $this->belongsTo('App\Notificacion','idnotification');
    }
}
