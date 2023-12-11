<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/MyBookings.css')}}">
    <title>My Bookings</title>
</head>
<body>
    <!-- myBookings.blade.php -->
@extends('layout')

@section('content')
<div class="hero-container">
    <div class="hero-hero">
        <div class="hero-form">
            <div class="my-bookings">
                <h2>My Bookings</h2>
                @if($bookings->isEmpty())
                    <p>No bookings found.</p>
                @else
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Total Persons</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->date }}</td>
                                    <td>{{ $booking->time }}</td>
                                    <td>{{ $booking->name }}</td>
                                    <td>{{ $booking->phone }}</td>
                                    <td>{{ $booking->total_person }}</td>
                                    <td>
                                        @if($booking->isApproved === 0)
                                            Pending
                                        @elseif($booking->isApproved === 1)
                                            Approved
                                        @elseif($booking->isApproved === 2)
                                            Declined
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html>