<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encounter extends Model
{
    public function campaign(){
        return $this->belongsTo('App\Campaign', 'id_campaign');

    }

    public function log(){
        return $this->hasOne('App\Log');
    }
}
