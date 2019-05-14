<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function log(){
        return $this->belongsTo('App\Log','id_log');
    }

    public function character(){
        return $this->belongsToMany('App\Character');
    }
}
