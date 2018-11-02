<?php

use Illuminate\Database\Seeder;
use App\User; 
use App\Models\Tweet; 

class LikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function($user) { 
            Tweet::where('user_id', '<>', $user->id)->each(function($tweet) use ($user) {
                if(rand(0,100) < 20) { 
                    $user->likedTweets()->attach($tweet); 
                }
            }); 
        }); 
    }
}
