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
    

@extends('layout')

@section('content')
      
    <h1>Welcome to Admin Panel</h1>
      
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
                        
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->fullname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    
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
                        
                        @foreach($bookingRequests as $booking)
                            <tr>
                                <td>{{ $booking->date }}</td>
                                <td>{{ $booking->time }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->phone }}</td>
                                <td>{{ $booking->total_person }}</td>
                                <td>
                                    
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
  <span class="link"> If You want to access the the edit/delete/add item in the menu its embedded in the menu blade -> <a href="{{ route('menu.index') }}">click me</a></span>
@endsection

</body>
</html>