<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/adminPanel.css')}}">
    <title>Admin Panel</title>
</head>
<body>
    <!-- adminPanel.blade.php -->

@extends('layout')

@section('content')
      <!-- Display admin panel content here -->
    <h1>Welcome to Admin Panel</h1>
      <!-- Table to display users -->
    <div class="hero-container">
        <div class="hero-hero">
            <div class="hero-form">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through users to display their info -->
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->fullname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <!-- Button to upgrade user to admin -->
                                    <form action="{{ route('admin.upgrade', $user->id) }}" method="POST">
                                        @csrf
                                        <button type="submit">Upgrade to Admin</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
      <!-- Table to display booking requests -->
    <div class="hero-container">
        <div class="hero-hero">
            <div class="hero-form">
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Total Persons</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through booking requests to display -->
                        @foreach($bookingRequests as $booking)
                            <tr>
                                <td>{{ $booking->date }}</td>
                                <td>{{ $booking->time }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->phone }}</td>
                                <td>{{ $booking->total_person }}</td>
                                <td>
                                    <!-- Buttons to accept or decline booking -->
                                    <form action="{{ route('admin.accept', $booking->id) }}" method="POST">
                                        @csrf
                                        <button type="submit">Accept</button>
                                    </form>
                                    <form action="{{ route('admin.decline', $booking->id) }}" method="POST">
                                        @csrf
                                        <button type="submit">Decline</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
@endsection

</body>
</html>