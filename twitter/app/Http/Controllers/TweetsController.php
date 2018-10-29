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

        $batMusical = $this->getBatMusical(); 
        $geneSimmons = $this->getGeneSimmons(); 
        $weirdAl = $this->getWeirdAl(); 
        $ozzy = $this->getOzzy(); 
        $defLeppard = $this->getDefLeppard(); 

        $tweet1 = $this->getTweet1($meatLoaf); 
        $tweet2 = $this->getTweet2($meatLoaf); 

        $viewData = [
            'user' => $meatLoaf, 
            'suggestionList' => [
                $batMusical, 
                $geneSimmons, 
                $weirdAl, 
                $ozzy, 
                $defLeppard
            ],

            'tweets' => [
                $tweet1, 
                $tweet2
            ]
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

    private function getBatMusical() { 
        $batMusical = new User(); 

        $batMusical->name = 'Bat Out of Hell';
        $batMusical->handle = '@BatTheMusical';
        $batMusical->icon = 'https://pbs.twimg.com/profile_images/1016606849284616194/Iwz5QTnQ_bigger.jpg';

        return $batMusical; 
    }

    private function getGeneSimmons() { 
        $geneSimmons = new User(); 

        $geneSimmons->name = 'Gene Simmons';
        $geneSimmons->handle = '@genesimmons';
        $geneSimmons->icon = 'https://pbs.twimg.com/profile_images/697624194205544449/PaabF10k_bigger.jpg';

        return $geneSimmons; 
    }

    private function getWeirdAl() { 
        $weirdAl = new User(); 

        $weirdAl->name = 'Al Yankovic';
        $weirdAl->handle = '@alyankovic'; 
        $weirdAl->icon = 'https://pbs.twimg.com/profile_images/246073324/IL2_bigger.jpg';

        return $weirdAl; 
    }

    private function getOzzy() { 
        $ozzy = new User(); 

        $ozzy->name = 'Ozzy Osbourne';
        $ozzy->handle = '@OzzyOsbourne'; 
        $ozzy->icon = 'https://pbs.twimg.com/profile_images/961022056631447552/Ywh6u5UM_bigger.jpg';

        return $ozzy;
    }

    private function getDefLeppard() {
        $defLeppard = new User(); 

        $defLeppard->name = 'Def Leppard';
        $defLeppard->handle = '@DefLeppard'; 
        $defLeppard->icon = 'https://pbs.twimg.com/profile_images/954324976089419776/UPCqtSzf_bigger.jpg';

        return $defLeppard; 
    }

    private function getTweet1($user) {
        $faker = Factory::create(); 
        $tweet1 = new Tweet(); 

        $tweet1->user = $user; 
        $tweet1->date = 'Oct 21';
        $tweet1->content = $faker->paragraph;
        $tweet1->commentCount = 123;
        $tweet1->retweetCount = 67;
        $tweet1->likeCount = 321;

        return $tweet1; 
    }

    private function getTweet2($user) { 
        $faker = Factory::create(); 
        $tweet2 = new Tweet(); 

        $tweet2->user = $meatLoaf; 
        $tweet2->date = 'Sep 27';
        $tweet2->content = $faker->paragraph;
        $tweet2->commentCount = 70;
        $tweet2->retweetCount = 53;
        $tweet2->likeCount = 431;

        return $tweet2; 
    }
}
