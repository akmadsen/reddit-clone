<?php

use Illuminate\Database\Seeder;
use App\Models\User; 
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

        $users = factory('App\Models\User',10)->create(); 

        // Generate the tweets content 
        foreach($users as $user)  
        {
            $count = mt_rand(0,10); 
            for($j=0; $j < $count; $j++) {
                $likes = User::where('id', '<>', $user->id)->inRandomOrder()->limit(mt_rand(0,40))->get(); 
                $tweet = new Tweet(); 
                $tweet->content = $faker->paragraph; 
                $tweet->user_id = $user->id; 
                $tweet->save(); 
            }
        }   
        
        foreach(User::all() as $user) { 
            foreach(Tweet::where('user_id', '<>', $user->id)->get() as $tweet) {
                $rand = rand(0,100); 
                if($rand < 20) { 
                    $user->likedTweets()->attach($tweet); 
                }
            }
        }
    }
}
