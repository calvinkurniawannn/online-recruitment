<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jobapplication;
use App\Models\applicant;
use App\Models\user;
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

    public function view_jobappdetail($slug)
    {
        $jobappdetail = Jobapplication::where('slug', $slug)->firstOrFail();
        return view('content.jobappdetail', compact('jobappdetail'));
    }

    public function view_myprofile($slug)
    {
        $myProfile = Applicant::where('slug', $slug)->firstOrFail();
        $myUser = User::where('slug', $slug)->firstOrFail();

        return view('content.myprofile', compact('myProfile', 'myUser'));
    }
}
