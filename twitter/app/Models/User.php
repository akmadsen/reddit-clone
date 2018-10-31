<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public $dates = ['joined'];

    public function tweets() 
    { 
        return $this->hasMany('App\Models\Tweet'); 
    }

    public function likedTweets() 
    { 
        return $this->belongsToMany('App\Models\Tweet');
    }
}
