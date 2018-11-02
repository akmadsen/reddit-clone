<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $table = 'user_profiles';
    
    public $dates = ['joined'];

    protected $primaryKey = 'user_id'; 

    public function owner() 
    { 
        $this->belongsTo('App\User'); 
    }
}
