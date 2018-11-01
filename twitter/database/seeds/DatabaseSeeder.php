<?php

use Illuminate\Database\Seeder;
use App\User; 
use App\Models\Profile; 
use App\Models\Tweet;
use Faker\Factory;  

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create(); 
                
        // Generate our users 
        factory('App\User', 15)->create(); 
        
        // For each of them, generate a profile and a certain number of tweets 
        User::all()->each(function($user) { 
            $faker = Factory::create(); 
            
            factory(Profile::class)->make(['user_id' => $user->id])->save(); 

            factory(Tweet::class, mt_rand(0,15))
                ->make()
                ->each(function($tweet) use ($user) {
                    $tweet->user_id = $user->id; 
                    $tweet->save(); 
                });
        }); 
                 
        User::all()->each(function($user) { 
            Tweet::where('user_id', '<>', $user->id)->each(function($tweet) use ($user) {
                if(rand(0,100) < 20) { 
                    $user->likedTweets()->attach($tweet); 
                }
            }); 

            User::where('id', '<>', $user->id)->each(function($following) use ($user) { 
                if(rand(0,100) < 50) { 
                    $user->following()->attach($following); 
                }
            }); 
        }); 
    }
}
