<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; 
use App\Models\Profile; 

class ProfileController extends Controller
{
    public function index($handle) 
    { 
        // We can grab the first handle element, because we know 
        $user = Profile::where('handle', $handle)->firstOrFail()->user;
        
        $viewData = [
            'user' => $user, 
        ]; 

        return view('user-profile', $viewData); 
    }

    public function edit() 
    { 
        return "PROFILE CONTROLLER -- EDIT";
    } 

    public function update() 
    { 
        return "PROFILE CONTROLLER -- UPDATE"; 
    }
}
