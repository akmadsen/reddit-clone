<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subreddit; 
use App\Models\Post; 

class PostController extends Controller
{
    /**
     * Index takes in the subreddit handle as an argument 
     */
    public function index($handle) 
    { 
        // if(!Auth::check()) { 
        //     return redirect("/r/$handle"); 
        // }

        $subreddit = Subreddit::where('handle', $handle)->firstOrFail(); 

        $viewData = [ 
            'subreddit' => $subreddit, 
        ];

        return view('add-post', $viewData); 
    }

    /**
     * Update takes in the subreddit handle as an argument 
     */
    public function update($handle) 
    { 
        // if(!Auth::check()) { 
        //     return redirect("/r/$handle"); 
        // }

        request()->validate([
            'title' => 'required|max:255|min:10',
            'content'=>'required',  
        ]);

        $formData = request()->all(); 

        $user = request()->user(); 
        $subreddit = Subreddit::where('handle', $handle)->firstOrFail(); 

        $post = new Post(); 
        $post->user_id = $user->id; 
        $post->subreddit_id = $subreddit->id; 
        $post->title = $formData['title']; 
        $post->content = $formData['content']; 
        $post->save(); 

        return redirect("/r/{$handle}"); 
    }
}
