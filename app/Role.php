<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    public $timestamps = false;

    protected $table ='roles';

    protected $fillable = [
        'role',  
    ];

    public function user(){
        return $this->belongsToMany('App\User');
    }

    public function campaign(){
        return $this->belongsToMany('App\Campaign');
    }
}
