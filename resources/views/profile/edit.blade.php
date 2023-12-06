<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/edit-form.css')}}">
    <title>Editing</title>
</head>
<body>
    @extends('layout')

    @section('content')
    <!-- edit.blade.php -->
    <div class="hero-container">
        <div class="hero-hero">
            <div class="hero-form">
                <form method="POST" action="{{ route('profile.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <label for="fullname">Full Name:</label>
                    <input type="text" name="fullname" value="{{ $user->fullname }}" required>
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{{ $user->email }}" required>
                    <label for="address">Address:</label>
                    <input type="text" name="address" value="{{ $user->address }}" required>
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" value="{{ $user->phone }}" required>
                    <label for="birthdate">Birthdate:</label>
                    <input type="date" name="birthdate" value="{{ $user->birthdate }}" required>
                    <!-- Include other fields for editing -->
                    <button type="submit" class="hero-button">Update Profile</button>
                </form>
            </div>
        </div>
    </div>
@endsection
</body>
</html>