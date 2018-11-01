<?php

use Illuminate\Database\Seeder;
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
        $users = factory('App\Models\Profile', 100)->create();
    }
}
