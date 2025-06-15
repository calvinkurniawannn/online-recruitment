<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
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
