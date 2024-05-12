<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function profile(){
        return view('system.pages.profile.profile');
    }

    function editProfile(){
        return view('system.pages.profile.editProfile');
    }
}
