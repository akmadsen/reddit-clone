<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Index takes in the subreddit handle as an argument 
     */
    public function index($handle) 
    { 
        return "POST CONTROLLER -- INDEX"; 
    }

    /**
     * Update takes in the subreddit handle as an argument 
     */
    public function update($handle) 
    { 
        return 'POST CONTROLLER -- UPDATE'; 
    }
}
