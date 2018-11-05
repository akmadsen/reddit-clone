<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($handle) 
    { 
        return "PROFILE CONTROLLER -- INDEX"; 
    }

    public function edit($handle) 
    { 
        return "PROFILE CONTROLLER -- EDIT";
    } 

    public function update($handle) 
    { 
        return "PROFILE CONTROLLER -- UPDATE"; 
    }
}
