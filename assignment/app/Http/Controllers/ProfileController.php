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
        $user = request()->user(); 
        $formData = request()->all();
        
        request()->validate([
            'name' => 'required', 
            'handle' => 'required|unique:user_profiles', 
            'icon' => 'nullable|url', 
            'profile_image' => 'nullable|url', 
            'description' => 'nullable|max:255', 
        ]); 

        $profile = $user->profile; 

        $user->name = $formData['name']; 

        $profile->handle = $formData['handle']; 
        $profile->icon = $formData['icon']; 
        $profile->profile_image = $formData['profile_image']; 
        $profile->description = $formData['description']; 
        $profile->save(); 

        return redirect("/u/{$user->profile->handle}"); 
    }
}
