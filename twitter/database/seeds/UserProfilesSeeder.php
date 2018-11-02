<?php

use Illuminate\Database\Seeder;
use App\User; 
use App\Models\Profile; 

class UserProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function($user) {             
            factory(Profile::class)->make(['user_id' => $user->id])->save(); 
        }); 
    }
}
