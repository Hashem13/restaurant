<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import Hash class
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('registration'); // Replace 'registration' with your view name
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'fullname' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'birthdate' => 'required|date',
        ]);

        // Hash the password
        $validatedData['password'] = Hash::make($request->input('password'));

        // Create a new user using the validated data
        $user = User::create($validatedData);

        return redirect()->route('login'); // Redirect to the named login route
    }
}
