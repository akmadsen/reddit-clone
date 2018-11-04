<?php

use Illuminate\Database\Seeder;
use App\Models\Subreddit; 
use App\Models\Post; 
use App\User; 

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        User::all()->each(function($user) {
            $postCount = mt_rand(5,25); 
            factory(Post::class, $postCount)->make([
                'user_id' => $user->id,   
            ])->each(function($post) { 
                $post->subreddit_id = Subreddit::inRandomOrder()->first()->id;
                $post->save(); 
            });
        }); 
    }
}
