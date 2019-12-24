<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function User(){
        return $this->belongsTo('App\User', 'userId');
    }
}
