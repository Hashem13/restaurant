<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); 
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (auth()->attempt($credentials)) {
        
        return redirect()->route('profile.show'); 
    }

    
    return back()->withInput($request->only('email'))
                 ->with('error', 'Invalid credentials. Please try again.');
}
public function logout()
{
    auth()->logout();
    return redirect('/'); 
}   

}