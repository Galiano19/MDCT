<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonState extends Model
{
    public function log(){
        return $this->belongsTo('App\Log','id_log');
    }

    public function monster(){
        return $this->belongsToMany('App\Monster');
    }
}
