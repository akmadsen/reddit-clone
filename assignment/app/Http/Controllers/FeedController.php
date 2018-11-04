<?php
/**
 * @author Alex Madsen
 * 
 * @date October 30, 2018
 */

namespace App\Http\Controllers;

use Faker\Factory; 
use Illuminate\Http\Request;

use App\Models\Post; 
use App\Models\Subreddit; 

class FeedController extends Controller
{
    public function index() 
    { 
        $posts = Post::inRandomOrder(25)->get(); 
        $suggestions = Subreddit::inRandomOrder(5)->get(); 

        $viewData = [
            'posts' => $posts,
            'suggestions' => $suggestions 
        ]; 

        return view('welcome', $viewData);
    }
}
