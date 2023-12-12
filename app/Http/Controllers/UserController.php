<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('registration'); 
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'fullname' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'birthdate' => 'required|date',
        ]);

        
        $validatedData['password'] = Hash::make($request->input('password'));

        
        $user = User::create($validatedData);

        return redirect()->route('login'); 
    }
}
