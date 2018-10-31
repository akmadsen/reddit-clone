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

        for($i=0; $i < 100; $i++) 
        {
            // $this->call(UsersTableSeeder::class);
            $user = new User(); 
            $user->handle = $faker->word; 
            $user->description = $faker->name; 
            $user->website = $faker->url; 
            $user->image = $faker->img(40,40);
            $user->save();  

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
