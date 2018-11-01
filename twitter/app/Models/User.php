<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'user_profiles';
    
    public $dates = ['joined'];

    public function owner() 
    { 
        $this->belongsTo('App\User'); 
    }
}
