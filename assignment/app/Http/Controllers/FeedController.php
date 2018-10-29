<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Faker\Factory; 

class Post { }
class Subreddit { }

function getRandomSubreddit() { 
    $faker = Factory::create(); 
    $sub = new Subreddit(); 

    $sub->name = getRandomSubName(); 
    $sub->img = $faker->imageUrl(20, 20);
    $sub->count = mt_rand(5000, 200000); 

    return $sub; 
}

function getRandomSubName() { 
    $idx = mt_rand(0, 9);
    
    $result = ""; 
    switch($idx) { 
        case 0:
            $result="birdwitharms";
            break;
        case 1:
            $result="hearthstone";
            break;
        case 2:
            $result="politics";
            break;
        case 3:
            $result="fedora";
            break;
        case 4:
            $result="i3wm";
            break;
        case 5:
            $result="onguardforthee";
            break;
        case 6:
            $result="nier";
            break;
        case 7:
            $result="metalgear";
            break;
        case 8:
            $result="books";
            break;
        case 9:
            $result="fantasy";
            break;
    }

    return $result; 
}

function getRandomTimestamp() { 
    $count = mt_rand(2,18); 
    $time = mt_rand(0,2); 

    $timeString = ""; 
    switch($time) { 
        case 0:
            $timeString = "minutes"; 
            break; 
        case 1:
            $timeString = "hours"; 
            break; 
        case 2:
            $timeString = "days"; 
            break; 
    }

    return $count . ' ' . $timeString . ' ago'; 
}

class FeedController extends Controller
{
    public function index() { 
        $faker = Factory::create(); 

        $posts = []; 

        for ($i = 0; $i < 4; $i++) { 
            $post = new Post(); 

            $post->imgUrl = $faker->imageUrl(20, 20); 
            $post->voteCount = number_format((mt_rand() / mt_getrandmax()) * 50, 1).'k';
            $post->subreddit = getRandomSubName(); 
            $post->username = $faker->userName(); 
            $post->timepast = getRandomTimestamp(); 
            $post->title = $faker->sentence(); 
            $post->content = $faker->paragraph(); 
            $post->commentCount = number_format((mt_rand() / mt_getrandmax()) * 25 + 5, 1).'k';

            array_push($posts, $post); 
        }

        $suggestions = []; 

        for($i = 0; $i < 5; $i++) { 
            array_push($suggestions, getRandomSubreddit()); 
        }

        $viewData = [
            'posts' => $posts,
            'suggestions' => $suggestions 
        ]; 

        return view('welcome', $viewData);
    }
}
