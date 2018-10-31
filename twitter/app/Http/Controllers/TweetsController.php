<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory; 
use App\Models\Tweet; 
use App\Models\User; 

class TweetsController extends Controller
{
    public function demo() 
    { 
        $tweets = Tweet::all(); 

        // Display DB stuff
        echo '<pre>'; 
        var_dump($tweets); 
        return ''; 
    }

    public function splash()
    { 
        return "Welcome to Twitter!"; 
    }

    // Not a 'real world solution' to default id to 1, but will work for our 
    // classroom exercise
    public function index($id = 1) 
    { 
        // var_dump($id); die; // debug arguments

        $faker = Factory::create(); 

        $primaryUser = $this->getPrimaryUser($id); 

        $suggestions = $this->getSuggestions($primaryUser); 
        $tweets = $this->getTweets($primaryUser); 

        $viewData = [
            'user' => $primaryUser, 
            'suggestionList' => $suggestions,
            'tweets' => $tweets
        ];

        return view('welcome', $viewData);
    }

    private function getPrimaryUser($id) { 
        $primaryUser = User::findOrFail($id); 

        // Generated values - We will find a way to get this from relationships
        $primaryUser->tweetCount = 1966;
        $primaryUser->followingCount = 71;
        $primaryUser->followerCount = '100K';
        $primaryUser->likesCount = 39;
        $primaryUser->momentsCount = 2;

        return $primaryUser; 
    }

    private function getSuggestions($mainUser) { 
        return User::where('id', '<>', $mainUser->id)->get(); 
    }

    private function getTweets($user) { 
        $faker = Factory::create(); 
        
        $tweets = Tweet::where('user_id', $user->id)->orderBy('date', 'desc')->get(); 

        // Mocking out comment / retweet / like values 
        foreach($tweets as $tweet) {  
            $tweet->commentCount = mt_rand(100,300);
            $tweet->retweetCount = mt_rand(100,300);
            $tweet->likeCount = mt_rand(100,300);
        }

        return $tweets; 
    }
}
