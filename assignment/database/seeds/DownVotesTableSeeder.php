<?php

use Illuminate\Database\Seeder;
use App\User; 
use App\Models\Post; 

class DownVotesTableSeeder extends Seeder
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
                    $upVote = $user->upVotes->whereIn('post_id', $post->id)->first(); 

                    if (!$upVote) { 
                        $user->downVotes()->attach($post); 
                    }
            }); 
        });  
    }
}
