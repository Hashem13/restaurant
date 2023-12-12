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
            
            $validatedData = $request->validate([
                'date' => 'required|date',
                'time' => 'required',
                'name' => 'required|string',
                'phone' => 'required|string',
                'total_person' => 'required|integer|min:1',
            ]);

            
            $userId = Auth::id();

            
            $booking = new Booking();
            $booking->date = $validatedData['date'];
            $booking->time = $validatedData['time'];
            $booking->name = $validatedData['name'];
            $booking->phone = $validatedData['phone'];
            $booking->total_person = $validatedData['total_person'];
            $booking->isApproved = 0; 
            $booking->created_by = $userId; 
            $booking->save();

            
            return redirect()->back()->with('success', 'Table booked successfully!');
        } catch (ValidationException $e) {
            
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            
            return redirect()->back()->with('error', 'Failed to book the table. Please try again.');
        }
    }
    public function myBookings()
{
    
    if (Auth::check()) {
        
        $user = Auth::user();
        $bookings = $user->bookings;

        return view('myBookings', compact('bookings'));
    } else {
        
        return redirect()->route('login')->with('error', 'Please log in to view your bookings.');
    }
}
}
