<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory; 
use App\Models\Tweet; 
use App\Models\User; 

class TweetsController extends Controller
{
    public function demo() { 
        $tweets = Tweet::all(); 

        // Display DB stuff
        echo '<pre>'; 
        var_dump($tweets); 
        return ''; 
    }

    public function index() { 
        $faker = Factory::create(); 

        $primaryUser = $this->getPrimaryUser
(); 

        $suggestions = $this->getSuggestions(); 
        $tweets = $this->getTweets($primaryUser); 

        $viewData = [
            'user' => $primaryUser, 
            'suggestionList' => $suggestions,
            'tweets' => $tweets
        ];

        return view('welcome', $viewData);
    }

    private function getPrimaryUser() { 
        $primaryUser = User::find(1); 

        // Generated values - We will find a way to get this from relationships
        $primaryUser->tweetCount = 1966;
        $primaryUser->followingCount = 71;
        $primaryUser->followerCount = '100K';
        $primaryUser->likesCount = 39;
        $primaryUser->momentsCount = 2;

        // FIXME: Does this belong here? Think about it... 
        $primaryUser->heroImgURL = 'https://pbs.twimg.com/profile_banners/38344185/1473999703/1500x500';

        return $primaryUser; 
    }

    private function generateThinUser($name, $handle, $icon) {
        $user = new User(); 

        $user->name = $name;
        $user->handle = $handle;
        $user->icon = $icon;

        return $user; 
    }

    private function getBatMusical() { 
        return $this->generateThinUser(
            'Bat Out of Hell', 
            '@BatTheMusical', 
            'https://pbs.twimg.com/profile_images/1016606849284616194/Iwz5QTnQ_bigger.jpg'
        ); 
    }

    private function getGeneSimmons() { 
        return $this->generateThinUser(
            'Gene Simmons', 
            '@genesimmons', 
            'https://pbs.twimg.com/profile_images/697624194205544449/PaabF10k_bigger.jpg'
        ); 
    }

    private function getWeirdAl() { 
        return $this->generateThinUser(
            'Al Yankovic',
            '@alyankovic', 
            'https://pbs.twimg.com/profile_images/246073324/IL2_bigger.jpg'
        ); 
    }

    private function getOzzy() { 
        return $this->generateThinUser(
            'Ozzy Osbourne', 
            '@OzzyOsbourne', 
            'https://pbs.twimg.com/profile_images/961022056631447552/Ywh6u5UM_bigger.jpg'
        ); 
    }

    private function getDefLeppard() {
        return $this->generateThinUser(
            'Def Leppard', 
            '@DefLeppard', 
            'https://pbs.twimg.com/profile_images/954324976089419776/UPCqtSzf_bigger.jpg'
        ); 
    }

    private function getSuggestions() { 
        $batMusical = $this->getBatMusical(); 
        $geneSimmons = $this->getGeneSimmons(); 
        $weirdAl = $this->getWeirdAl(); 
        $ozzy = $this->getOzzy(); 
        $defLeppard = $this->getDefLeppard(); 

        return [$batMusical, $geneSimmons, $weirdAl, $ozzy, $defLeppard]; 
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
