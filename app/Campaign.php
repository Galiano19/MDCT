<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public function role(){
        return $this->belongsToMany('App\Role');
    }

    public function encounter(){
        return $this->hasMany('App\Encounter');
    }


}
