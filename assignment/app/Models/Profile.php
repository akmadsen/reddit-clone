<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'user_profiles'; 

    protected $primaryKey = 'user_id'; 

    public function user()  
    {
        return $this->belongsTo('App\User'); 
    }
}