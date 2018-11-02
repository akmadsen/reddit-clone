<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile; 

class ProfileController extends Controller
{
    public function index() 
    { 
        $user = request()->user(); 
        $profile = Profile::find($user->id); 

        $viewData = [
            'handle' => $profile->handle, 
            'description' => $profile->description, 
            'website' => $profile->website, 
            'image' => $profile->image, 
            'hero' => $profile->hero_image, 
            'location' => $profile->location, 
        ];

        return view('profile-form', $viewData); 
    }

    public function update() 
    {
        $formData = request()->all(); 

        $user = request()->user(); 

        $profile = Profile::find($user->id);
        
        $profile->handle = $formData['handle'];  
        $profile->description = $formData['description'];  
        $profile->website = $formData['website'];  
        $profile->image = $formData['image'];  
        $profile->hero_image = $formData['hero'];  
        $profile->location = $formData['location'];  
        $profile->save(); 

        return redirect('/profile'); 
        // return redirect("/{$user->id}"); // End-game
    }
}
