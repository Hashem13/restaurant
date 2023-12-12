<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
  <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
</head>
<body>
  
  @extends('layout')

  @section('content')
  <div class="hero-container">
    <div class="reg_form">
      <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <h2>Create an Account</h2>
        <input type="text" name="fullname" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <label for="birthdate">Birthdate:</label>
        <input type="date" name="birthdate" required>
        <input type="submit" value="Register">
      </form>
    </div>
  </div>
  @endsection
  
</body>
</html>