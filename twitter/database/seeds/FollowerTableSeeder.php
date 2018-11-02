<?php

use Illuminate\Database\Seeder;
use App\User; 

class FollowerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function($user) { 
            User::where('id', '<>', $user->id)->each(function($following) use ($user) { 
                if(rand(0,100) < 50) { 
                    $user->following()->attach($following); 
                }
            }); 
        }); 
    }
}
