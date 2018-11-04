<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::all()->each(function($user) {
            factory(App\Models\Profile::class)->make([
                'user_id' => $user->id,
            ])->save(); 
        }); 
    }
}
