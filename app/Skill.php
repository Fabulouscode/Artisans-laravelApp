<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function User(){
        return $this->hasMany('App\User', 'userId');
    }
}
