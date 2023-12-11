<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Booking; 

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->check() && auth()->user()->isAdmin()) {
            $users = User::all();
            $bookingRequests = Booking::all();
            return view('adminPanel', compact('users', 'bookingRequests'));
        } else {
            return redirect()->route('home')->with('error', 'Unauthorized access!');
        }
    }

    public function upgradeUser($id)
    {
        $user = User::findOrFail($id);
        $user->is_admin = true;
        $user->save();
        return redirect()->back()->with('success', 'User upgraded to admin successfully');
    }

    public function acceptBooking($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->isApproved = 1;
        $booking->save();
        return redirect()->back()->with('success', 'Booking request accepted');
    }

    public function declineBooking($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->isApproved = 2;
        $booking->save();
        return redirect()->back()->with('success', 'Booking request declined');
    }
}
