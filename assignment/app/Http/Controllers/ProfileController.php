<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($handle) 
    { 
        return "PROFILE CONTROLLER -- INDEX"; 
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
