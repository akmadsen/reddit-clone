<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user() 
    {
        return $this->belongsTo('App\User', 'user_id'); 
    }

    public function subreddit() 
    { 
        return $this->belongsTo('App\Models\Subreddit', 'subreddit_id'); 
    }

    public function upVotes() 
    {
        return $this->belongsToMany('App\User'); 
    }

    public function downVotes() 
    { 
        return $this->belongsToMany('App\User'); 
    }
}
