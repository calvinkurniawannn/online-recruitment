<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Applicant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function post_signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'birthdate' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'address' => 'required|string|max:500',
        ]);

        // Create the user and store into a variable
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_by' => 'system',
            'modified_by' => 'system'
        ]);

        Applicant::create([
            'user_id' => $user->id,
            'official_name' => $request->name,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'address' => $request->address,
            'slug' => $user->slug
        ]);


        return redirect()->route('view.login')->with('success', 'Registration successful!');
    }

    public function post_login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Get credentials from request
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            Auth::user()->update(['islogin' => 1]);

            return redirect()->route('view.landingpage');
        }
    }

    public function post_logout(Request $request)
    {
        $user = Auth::user();

        // Set islogin to 0 before logout
        if ($user) {
            $user->update(['islogin' => 0]);
        }

        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        return redirect()->route('view.landingpage');
    }
}
