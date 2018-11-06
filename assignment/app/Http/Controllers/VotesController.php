<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VotesController extends Controller
{
    /**
     * Apply an up-vote to a post specified by a given ID 
     */
    public function upVote($id) 
    {
        return 'VOTES CONTROLLER -- UP VOTE'; 
    }

    /**
     * Apply a down-vote to a post specified by a given ID 
     */
    public function downVote($id) 
    { 
        return 'VOTES CONTROLLER -- DOWN VOTE'; 
    }
}
