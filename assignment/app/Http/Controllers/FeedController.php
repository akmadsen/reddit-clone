<?php

namespace App\Http\Controllers;

use Faker\Factory; 
use Illuminate\Http\Request;

/**
 * Utility class, for what doesn't fit in posts or subs
 */
class Util 
{
    public static function generateCountThousands($max, $min) 
    { 
        $ratio = mt_rand() / mt_getrandmax(); 
        $range = $max - $min; 
        $offset = $min; 

        return number_format(($ratio * $range) + $offset, 1).'k';
    }
}

class PostFactory 
{
    private static function generatePost() 
    {
        $faker = Factory::create(); 

        $post = new Post(); 

        $post->imgUrl = $faker->imageUrl(20, 20); 
        $post->voteCount = Util::generateCountThousands(50, 20);
        $post->subreddit = Subreddit::getRandomSubName(); 
        $post->username = $faker->userName(); 
        $post->timepast = Post::getRandomTimestamp(); 
        $post->title = $faker->sentence(); 
        $post->content = $faker->paragraph(); 
        $post->commentCount = Util::generateCountThousands(30,5);

        return $post; 
    }

    public static function generatePostList($quantity) 
    { 
        $posts = []; 

        for ($i = 0; $i < $quantity; $i++) { 
            array_push($posts, PostFactory::generatePost()); 
        }

        return $posts; 
    }
}

/**
 * Class for Posts and Post-related Utilities 
 */
class Post 
{
    public static function getRandomTimestamp() 
    { 
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
    
        return "$count $timeString ago"; 
    }
}

class SubredditFactory 
{
    private static function generateSub($name) { 
        $faker = Factory::create(); 
        $sub = new Subreddit(); 
    
        $sub->name = $name; 
        $sub->img = $faker->imageUrl(20, 20);
        $sub->count = mt_rand(5000, 200000); 
    
        return $sub; 
    }

    public static function getRandomSubreddit()
    { 
        return SubredditFactory::generateSub(Subreddit::getRandomSubName()); 
    }

    public static function getSubredditList() 
    { 
        $suggestions = []; 

        for($i = 0; $i < 5; $i++) { 
            array_push($suggestions, SubredditFactory::getRandomSubreddit()); 
        }

        return $suggestions; 
    }

    public static function getFullSubList()
    { 
        $list = []; 
        foreach(Subreddit::$names as $name) { 
            array_push($list, SubredditFactory::generateSub($name)); 
        }   
        return $list; 
    }

    public static function getSubset($subs, $count) 
    { 
        $result = [];
        $random_keys = array_rand($subs, $count); 

        foreach($random_keys as $key) { 
            array_push($result, $subs[$key]); 
        }

        return $result; 
    }
}

/**
 * Class for Subreddits and Subreddit-Related Utilities
 */
class Subreddit
{
    public static $names = [
        'birdswitharms', 
        'hearthstone', 
        'politics', 
        'fedora', 
        'i3wm', 
        'onguardforthee', 
        'nier', 
        'XCOM2', 
        'metalgear', 
        'books', 
        'fantasy'
    ];

    public static function getRandomSubName() 
    {
        $idx = mt_rand(0, count(Subreddit::$names) - 1);
        return Subreddit::$names[$idx]; 
    }
 }

class FeedController extends Controller
{
    public function index() 
    { 
        $allSubs = SubredditFactory::getFullSubList(); 

        $posts = PostFactory::generatePostList(4, $allSubs); 
        $suggestions = SubredditFactory::getSubset($allSubs, 5); 

        $viewData = [
            'posts' => $posts,
            'suggestions' => $suggestions 
        ]; 

        return view('welcome', $viewData);
    }
}
