<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function User(){
        return $this->belongsTo('App\User', 'userId');
    }
}
