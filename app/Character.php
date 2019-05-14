<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public $timestamps = false;

    protected $table ='characters';

    protected $fillable = [
        'level', 'prof', 'hitpoints','ac','str','dex','con','inte','wis','cha','st_str','st_dex','st_con','st_inte','st_wis','st_cha','acrobatics','animalhan','arcana','athletics','deception','history','insight','intimidation','investigation','medicine','nature','perception','performance','persuasion','religion','soh','stealth','survival','name','class','color','back',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }

    public function states(){
        return $this->belongsToMany('App\State');
    }
}
