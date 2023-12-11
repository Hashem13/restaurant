<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use Illuminate\Validation\ValidationException;

class BookingController extends Controller
{
    public function bookTable(Request $request)
    {
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'date' => 'required|date',
                'time' => 'required',
                'name' => 'required|string',
                'phone' => 'required|string',
                'total_person' => 'required|integer|min:1',
            ]);

            // Get the currently authenticated user's ID
            $userId = Auth::id();

            // Create a new Booking instance with the user ID and store it in the database
            $booking = new Booking();
            $booking->date = $validatedData['date'];
            $booking->time = $validatedData['time'];
            $booking->name = $validatedData['name'];
            $booking->phone = $validatedData['phone'];
            $booking->total_person = $validatedData['total_person'];
            $booking->isApproved = 0; // Set to pending by default
            $booking->created_by = $userId; // Associate the user ID with the booking
            $booking->save();

            // Redirect back to the same view with a success message
            return redirect()->back()->with('success', 'Table booked successfully!');
        } catch (ValidationException $e) {
            // Validation errors occurred, redirect back with errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Other errors occurred, redirect back with a generic error message
            return redirect()->back()->with('error', 'Failed to book the table. Please try again.');
        }
    }
    public function myBookings()
{
    // Check if the user is authenticated
    if (Auth::check()) {
        // Retrieve bookings associated with the logged-in user
        $user = Auth::user();
        $bookings = $user->bookings;

        return view('myBookings', compact('bookings'));
    } else {
        // User is not logged in, redirect to the login page
        return redirect()->route('login')->with('error', 'Please log in to view your bookings.');
    }
}
}
