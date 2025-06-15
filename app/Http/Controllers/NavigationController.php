<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jobapplication;
use Illuminate\Routing\Controller;

class NavigationController extends Controller
{
    public function view_landingpage()
    {
        $jobapplication =  Jobapplication::all();
        return view('content.landingpage', compact('jobapplication'));
    }

    public function view_signup()
    {
        return view('auth.signup');
    }
    public function view_login()
    {
        return view('auth.login');
    }
}
