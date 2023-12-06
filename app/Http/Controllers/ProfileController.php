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
        $user = auth()->user(); // Get the authenticated user
        return view('profile', compact('user')); // Pass user data to the profile view
    }
    public function edit()
{
    $user = auth()->user();
    return view('profile.edit', compact('user'));
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id); // Fetch the user by ID

    // Validate the incoming data
    $validatedData = $request->validate([
        'fullname' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'phone' => 'required',
        'birthdate' => 'required|date',
        // Add validation rules for other fields
    ]);

    // Update the user with the validated data
    $user->update($validatedData);

    return redirect()->route('profile.show', $id)->with('success', 'Profile updated successfully');
}



}
