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

    public function following()
    { 
        return $this->belongsToMany('App\Models\User', 'user_followers', 'user_id', 'follower_id'); 
    }
    
    public function followers() 
    { 
        return $this->belongsToMany('App\Models\User', 'user_followers', 'follower_id', 'user_id'); 
    }
}
