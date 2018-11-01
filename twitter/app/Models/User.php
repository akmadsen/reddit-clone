<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'user_profiles';
    
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
        return $this->belongsToMany('App\Models\User', 'user_following', 'user_id', 'following_id'); 
    }
    
    public function followers() 
    { 
        return $this->belongsToMany('App\Models\User', 'user_following', 'following_id', 'user_id'); 
    }
}
