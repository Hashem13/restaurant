<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Assuming you have a Booking model

class BookingController extends Controller
{
    public function bookTable(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'name' => 'required|string',
            'phone' => 'required|string',
            'total_person' => 'required|integer|min:1',
        ]);

        // Create a new Booking instance and store it in the database
        $booking = new Booking();
        $booking->date = $validatedData['date'];
        $booking->time = $validatedData['time'];
        $booking->name = $validatedData['name'];
        $booking->phone = $validatedData['phone'];
        $booking->total_person = $validatedData['total_person'];
        $booking->save();

        // Redirect back to the same view with a success message
        return redirect()->back()->with('success', 'Table booked successfully!');
    }
}
