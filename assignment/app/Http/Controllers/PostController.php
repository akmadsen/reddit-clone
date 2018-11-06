<?php
/**
 * @author Alex Madsen
 * 
 * @date November 6, 2018
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post; 
use App\Models\Subreddit; 

class PostController extends Controller
{
    /**
     * Index takes in the subreddit handle as an argument 
     */
    public function index($handle) 
    { 
        if(!(request()->user())) { 
            return redirect('/register'); 
        }

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
        if(!(request()->user())) { 
            return redirect()->back(); 
        }

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

        // Start out upvoting your own post 
        $user->upVotes()->attach($post);

        return redirect("/r/{$handle}"); 
    }
}
