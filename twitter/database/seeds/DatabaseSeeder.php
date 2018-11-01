<?php

use Illuminate\Database\Seeder;
use App\User; 
use App\Models\User as Profile; 
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

        // $profiles = factory('App\Models\User',15)->create(); 

        // Generate the tweets content 
        for ($i = 0; $i < 15; $i++) {
            $user = new User();
            $user->email = $faker->email;
            $user->name = $faker->name;
            $user->password = bcrypt('12341234');
            $user->save();

            $profile = new Profile(); 
            $profile->user_id = $user->id; 
            $profile->handle = $faker->word; 
            $profile->name = $faker->name;
            $profile->description = $faker->sentence;
            $profile->website = $faker->url;
            $profile->location = "$faker->city, $faker->stateAbbr";
            $profile->image = 'https://picsum.photos/400/?random'.rand(0,500);
            $profile->hero_image = 'https://picsum.photos/1500/400/?random'.rand(0,500);
            $profile->save(); 


            $count = mt_rand(0,15); 
            for($j=0; $j < $count; $j++) {
                $tweet = new Tweet(); 
                $tweet->user_id = $user->id; 
                $tweet->content = $faker->paragraph; 
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

            foreach(User::where('id', '<>', $user->id)->get() as $following) { 
                $rand = rand(0,100); 
                if($rand < 50) { 
                    $user->following()->attach($following); 
                }
            }
        }
    }
}
