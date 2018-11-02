<?php

use Illuminate\Database\Seeder;
use App\User; 
use App\Models\Tweet; 

class TweetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function($user) {             
            factory(Tweet::class, mt_rand(0,15))
                ->make()
                ->each(function($tweet) use ($user) {
                    $tweet->user_id = $user->id; 
                    $tweet->save(); 
                });
        }); 
    }
}
