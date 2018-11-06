<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subreddit; 
use App\Models\Post; 

class SubredditController extends Controller
{
    public function index($handle) 
    {
        $subreddit = Subreddit::where('handle', $handle)->firstOrFail(); 
        $posts = Post::where('subreddit_id', $subreddit->id)->orderBy('created_at', 'desc')->limit(25)->get();

        $viewData = [
            'subreddit' => $subreddit, 
            'posts' => $posts, 
        ]; 
        
        return view('subreddit', $viewData); 
    }
}
