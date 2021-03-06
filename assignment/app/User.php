<?php
/**
 * Edited for Eloquent Relationships 
 * 
 * @author Alex Madsen
 * 
 * @date November 6, 2018
 */
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile() 
    { 
        return $this->hasOne('App\Models\Profile'); 
    }

    public function posts() 
    { 
        return $this->hasMany('App\Models\Post'); 
    }

    public function upVotes() 
    { 
        return $this->belongsToMany('App\Models\Post', 'up_votes');
    }

    public function downVotes() 
    { 
        return $this->belongsToMany('App\Models\Post', 'down_votes'); 
    }
}
