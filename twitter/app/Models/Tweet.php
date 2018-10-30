<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public $dates = ['date']; // Laravel does date_create for us!

    public function user()
    {
        return $this->belongsTo('App\Models\User'); 
    }
}
