<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <title>Profile</title>
</head>
<body>
    @extends('layout')

    @section('content')
    @if($user !== null && $user->fullname !== null)
<div class="hero-container">
    <div class="hero-hero">
        <div class="hero-form">
            <h1>{{ $user->fullname }}'s Profile</h1>
            <p>Name: {{ $user->fullname }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>Address: {{ $user->address }}</p>
            <p>Phone No.: {{ $user->phone }}</p>
            <p>Birthdate: {{ $user->birthdate }}</p>
            <a href="{{ route('profile.edit', $user->id) }}"><button class="hero-button">Edit Profile</button></a>
            <a href="{{ URL('booking') }}"><button class="hero-button">Book A Table</button></a>
            <a href="{{ route('myBookings') }}"><button class="hero-button">My Bookings</button></a>
        </div>
    </div>
</div>
@elseif($user === null)
<div class="hero-container">
    <div class="hero-hero">
        <div class="hero-form">
            <p style="text-align: center">You Must Login First To see the Profile or To Book a Table</p>
        </div>
    </div>
</div>
@endif
    @endsection
</body>
</body>
</html>