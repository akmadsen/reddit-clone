<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public $dates = ['date']; // Laravel does date_create for us!

    // Establishes a relationship with the user model 
    public function user()
    {
        return $this->belongsTo('App\Models\User'); 
    }

    public function likes()
    {
        return $this->belongsToMany('App\Models\User'); 
       
        // How to override the join table name 
        // return $this->belongsToMany('App\Models\User', 'likes'); 
    }
}
