<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'config_tools';
    protected  $primaryKey = 'idconfig';
    public $timestamps = false;
}
