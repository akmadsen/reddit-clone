<?php
/**
 * @author Alex Madsen
 * 
 * @date October 30, 2018
 */

namespace App\Http\Controllers;

use Faker\Factory; 
use Illuminate\Http\Request;

/**
 * Utulity Class for what conceptually stands on it's own 
 */
class Util 
{
    /**
     * Generate a thousands-scale count for comments, views, likes, and whatnot 
     */
    public static function generateCountThousands($max, $min) 
    { 
        $ratio = mt_rand() / mt_getrandmax(); 
        $range = $max - $min; 
        $offset = $min; 

        return number_format(($ratio * $range) + $offset, 1).'k';
    }
}

/**
 * Generates posts in bulk using static factory pattern
 */
class PostFactory 
{
    /**
     * Fake out a random timestamp in the form of 'XX <hours/minutes/days> ago' s
     */
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

    /**
     * Generate individual post, private helper method
     * 
     * @param array A list of available subreddit objects to be paired with the post randomly 
     */
    private static function generatePost($subsList) 
    {
        $faker = Factory::create(); 

        $post = new Post(); 

        $subIdx = mt_rand(0, count($subsList) - 1); 

        $post->subreddit = $subsList[$subIdx]; 
        $post->voteCount = Util::generateCountThousands(50, 20);
        $post->username = $faker->userName(); 
        $post->timepast = PostFactory::getRandomTimestamp(); 
        $post->title = $faker->sentence(); 
        $post->content = $faker->paragraph(); 
        $post->commentCount = Util::generateCountThousands(30,5);

        return $post; 
    }

    /**
     * Generates a given number of posts, paired with any of a given subreddit list
     */
    public static function generatePostList($quantity, $subsList) 
    { 
        $posts = []; 

        for ($i = 0; $i < $quantity; $i++) { 
            array_push($posts, PostFactory::generatePost($subsList)); 
        }

        return $posts; 
    }
}

/**
 * Static subreddit factory 
 */
class SubredditFactory 
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
        'fantasy',
        'lovecraft', 
        'bojackhorseman'
    ];

    /**
     * Generate a single random subreddit, with a given subreddit name
     */
    private static function generateSub($name) { 
        $faker = Factory::create(); 
        $sub = new Subreddit(); 
    
        $sub->name = $name; 
        $sub->img = $faker->imageUrl(20, 20);
        $sub->count = mt_rand(5000, 200000); 
    
        return $sub; 
    }

    /**
     * Get a list of all the subs
     */
    public static function getFullSubList()
    { 
        $list = []; 
        foreach(SubredditFactory::$names as $name) { 
            array_push($list, SubredditFactory::generateSub($name)); 
        }   
        return $list; 
    }

    /**
     * Get a subset list of a given subreddit list
     */
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

class Subreddit { }
class Post { }

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
