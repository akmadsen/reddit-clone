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

        $users = factory('App\Models\User', 100)->create();

        // Generate the tweets content 
        foreach($users as $user)  
        {
            $count = mt_rand(0,20); 
            for($j=0; $j < $count; $j++) {
                $tweet = new Tweet(); 
                $tweet->content = $faker->paragraph; 
                $tweet->user_id = $user->id; 
                $tweet->save(); 
            }
        }        
    }
}
