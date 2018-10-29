<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory; 

class User { }
class Tweet { }

class TweetsController extends Controller
{
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

    private function generateFakeTweet($user, $date, $comments, $retweets, $likes) {
        $faker = Factory::create(); 
        $tweet = new Tweet(); 
        
        $tweet->user = $user; 
        $tweet->date = $date;
        $tweet->content = $faker->paragraph;
        $tweet->commentCount = $comments;
        $tweet->retweetCount = $retweets;
        $tweet->likeCount = $likes;

        return $tweet; 
    } 

    private function getTweet1($user) {
        return $this->generateFakeTweet(
            $user, 
            'Oct 21', 
            123, 67, 321
        ); 
    }

    private function getTweet2($user) { 
        return $this->generateFakeTweet(
            $user, 
            'Sep 27', 
            70, 53, 431
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
        $tweet1 = $this->getTweet1($user); 
        $tweet2 = $this->getTweet2($user); 

        return [$tweet1, $tweet2]; 
    }
}
