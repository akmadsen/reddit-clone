<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile; 
// use App\Http\Requests\UpdateProfileRequest; 

class ProfileController extends Controller
{
    public function index() 
    { 
        $user = request()->user(); 
        $profile = $user->profile; 

        $viewData = [
            'user' => $user,
            'profile' => $profile,
        ];

        return view('profile-form', $viewData); 
    }

    public function update() 
    {
        $formData = request()->all(); 

        // Bad way to do it 
        // if(empty($formData['handle'])) { 
        //     throw new \Exception("You need to enter a handle."); 
        // }

        // If we fail this validation, $errors gets injected into our view
        request()->validate([
            'handle' => 'required', 
        ]); 

        $user = request()->user(); 

        $profile = $user->profile;
        
        $profile->handle = $formData['handle'];  
        $profile->description = $formData['description'];  
        $profile->website = $formData['website'];  
        $profile->image = $formData['image'];  
        $profile->hero_image = $formData['hero_image'];  
        $profile->location = $formData['location'];  

        $profile->save(); 

        return redirect('/profile'); 
        // return redirect("/{$user->id}"); // End-game
    }
}
