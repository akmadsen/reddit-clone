<?php

use Illuminate\Database\Seeder;
use App\Models\User; 

class UserProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory('App\Models\User', 100)->create();
    }
}
