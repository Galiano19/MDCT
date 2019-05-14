<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function encounter(){
        return $this->hasOne('App\Encounter');
    }

    public function states(){
        return $this->belongsToMany('App\State');
    }

    public function monstates(){
        return $this->belongsToMany('App\MonState');
    }
}
