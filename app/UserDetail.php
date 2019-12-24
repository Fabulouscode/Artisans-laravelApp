<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = ['phone, gender, hoobies, city, profession'];
    
    public function User(){
        return $this->belongsTo('App\User', 'userId');
    }
}