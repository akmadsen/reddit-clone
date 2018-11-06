<?php
/**
 * @author Alex Madsen
 * 
 * @date November 6, 2018
 */

use Illuminate\Database\Seeder;

use App\User; 
use App\Models\Post;

class UpVotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function ($user) { 
            Post::inRandomOrder()
                ->limit(25)
                ->get()
                ->each(function($post) use ($user) {
                    $user->upVotes()->attach($post); 
            }); 
        });         
    }
}
