<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function User(){
        return $this->hasMany('App\User', 'userId');
    }
}
