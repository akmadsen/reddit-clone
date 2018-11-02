<?php

namespace App\Http\Controllers;

use App\User; 
use App\Models\Tweet; 
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    // Not a 'real world solution' to default id to 1, but will work for our 
    // classroom exercise
    public function index($id = 1) 
    { 
        $primaryUser = $this->getPrimaryUser($id); 

        $suggestions = $this->getSuggestions($primaryUser); 
        
        $tweets = $this->getTweets($primaryUser); 

        $viewData = [
            'user' => $primaryUser, 
            'suggestionList' => $suggestions,
            'tweets' => $tweets, 
            'defaultHero' => 'assets/default-hero.png', 
            'defaultImage' => 'https://abs.twimg.com/sticky/default_profile_images/default_profile_400x400.png'
        ];

        return view('welcome', $viewData);
    }

    private function getPrimaryUser($id) 
    { 
        $primaryUser = User::findOrFail($id); 

        // Generated values - We will find a way to get this from relationships
        $primaryUser->profile->momentsCount = 2;

        return $primaryUser; 
    }

    private function getSuggestions($mainUser) 
    { 
        return User::where('id', '<>', $mainUser->id)->inRandomOrder()->limit(5)->get(); 
    }

    private function getTweets($user) 
    {         
        $tweets = Tweet::where('user_id', $user->id)->orderBy('created_at', 'desc')->get(); 

        // Mocking out comment / retweet / like values 
        foreach($tweets as $tweet) {  
            $tweet->commentCount = mt_rand(100,300);
            $tweet->retweetCount = mt_rand(100,300);
        }

        return $tweets; 
    }
}
