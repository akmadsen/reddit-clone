<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; 
use App\Models\Profile; 
use App\Models\Post; 

class ProfileController extends Controller
{
    public function index($handle) 
    { 
        // We can grab the first handle element, because we know 
        $user = Profile::where('handle', $handle)->firstOrFail()->user;
        $posts = Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->get(); 

        $viewData = [
            'user' => $user, 
            'posts' => $posts, 
        ]; 

        return view('user-profile', $viewData); 
    }

    public function edit() 
    { 
        $viewData = [
            'user' => request()->user(), 
        ]; 

        return view('edit-profile', $viewData);
    } 

    public function update() 
    { 
        return "PROFILE CONTROLLER -- UPDATE"; 
    }
}
