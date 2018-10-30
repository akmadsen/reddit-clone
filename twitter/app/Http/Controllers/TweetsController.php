<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory; 
use App\Models\Tweet; 

class User { }

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

        $meatLoaf = $this->getMeatLoaf(); 

        $suggestions = $this->getSuggestions(); 
        $tweets = $this->getTweets($meatLoaf); 

        $viewData = [
            'user' => $meatLoaf, 
            'suggestionList' => $suggestions,
            'tweets' => $tweets
        ];

        return view('welcome', $viewData);
    }

    private function getMeatLoaf() { 
        $meatLoaf = new User(); 

        $meatLoaf->name = 'Meat Loaf';
        $meatLoaf->handle = '@RealMeatLoaf';
        $meatLoaf->description = 'Official Meat Loaf Twitter Page';
        $meatLoaf->location = 'Los Angeles and NY';
        $meatLoaf->websiteURL = 'https://www.meatloaf.net';
        $meatLoaf->websiteTitle = 'meatloaf.net';
        $meatLoaf->joinDate = 'Joined May 2009';
        $meatLoaf->tweetCount = 1966;
        $meatLoaf->followingCount = 71;
        $meatLoaf->followerCount = '100K';
        $meatLoaf->likesCount = 39;
        $meatLoaf->momentsCount = 2;
        $meatLoaf->profileImgURL = 'https://pbs.twimg.com/profile_images/812809838/IMG_7923_bw_400x400.jpg';
        $meatLoaf->icon = 'https://pbs.twimg.com/profile_images/812809838/IMG_7923_bw_bigger.jpg';
        $meatLoaf->heroImgURL = 'https://pbs.twimg.com/profile_banners/38344185/1473999703/1500x500';

        return $meatLoaf; 
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
        
        $tweets = Tweet::orderBy('date', 'desc')->get(); 

        foreach($tweets as $tweet) {  
            $tweet->commentCount = mt_rand(100,300);
            $tweet->retweetCount = mt_rand(100,300);
            $tweet->likeCount = mt_rand(100,300);
        }

        return $tweets; 
    }
}
