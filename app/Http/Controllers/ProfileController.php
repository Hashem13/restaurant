<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user(); 
        return view('profile', compact('user')); 
    }
    public function edit()
{
    $user = auth()->user();
    return view('profile.edit', compact('user'));
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id); 

    
    $validatedData = $request->validate([
        'fullname' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'phone' => 'required',
        'birthdate' => 'required|date',
        
    ]);

    
    $user->update($validatedData);

    return redirect()->route('profile.show', $id)->with('success', 'Profile updated successfully');
}



}
