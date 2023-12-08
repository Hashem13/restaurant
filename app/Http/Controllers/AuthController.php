<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Replace 'auth.login' with your actual login view path
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (auth()->attempt($credentials)) {
        // Authentication passed
        return redirect()->route('profile.show'); // Redirect to the profile route
    }

    // Authentication failed
    return back()->withInput($request->only('email'))
                 ->with('error', 'Invalid credentials. Please try again.');
    }   

}