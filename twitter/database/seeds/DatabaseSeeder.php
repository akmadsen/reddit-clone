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
        $this->call([
            UserTableSeeder::class, 
            UserProfilesSeeder::class,
            TweetTableSeeder::class, 
            LikeTableSeeder::class, 
            FollowerTableSeeder::class,
        ]); 
    }
}
