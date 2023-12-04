<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/booking.css')}}">
    <title>booking</title>
</head>
<body>
    @extends('layout')

    @section('content')
    <div class="hero-container">
        <div class="hero-hero">
            <div class="hero-title">
                <span class="hero-text HeadlineH1"><span>Book A Table</span></span>
                <span class="hero-text02 Body18pxRegular">
                    <span>
                        We consider all the drivers of change gives you the components you need to change to create a truly happens.
                    </span>
                </span>
            </div>
            <div class="hero-form">
                <form method="POST" action="{{ route('book.table') }}">
                    @csrf
                    <div class="hero-content">
                        <div class="hero-box">
                            <!-- Date -->
                            <div class="hero-row">
                                <div class="hero-frame1">
                                    <div class="hero-title1">
                                        <span class="hero-text04 Body16pxBold">
                                            <span>Date</span>
                                        </span>
                                    </div>
                                    <input type="date" name="date">
                                </div>
                                <!-- Time -->
                                <div class="hero-frame2">
                                    <div class="hero-title2">
                                        <span class="hero-text08 Body16pxBold">
                                            <span>Time</span>
                                        </span>
                                    </div>
                                    <input type="time" name="time">
                                </div>
                            </div>
                            <!-- Name and Phone -->
                            <div class="hero-row1">
                                <div class="hero-frame11">
                                    <div class="hero-title3">
                                        <span class="hero-text12 Body16pxBold">
                                            <span>Name</span>
                                        </span>
                                    </div>
                                    <input type="text" name="name" placeholder="Enter your name">
                                </div>
                                <div class="hero-frame21">
                                    <div class="hero-title4">
                                        <span class="hero-text16 Body16pxBold">
                                            <span>Phone</span>
                                        </span>
                                    </div>
                                    <input type="tel" name="phone" placeholder="x-xxx-xxx-xxxx">
                                </div>
                            </div>
                            <!-- Total Person -->
                            <div class="hero-row2">
                                <div class="hero-frame12">
                                    <div class="hero-title5">
                                        <span class="hero-text20 Body16pxBold">
                                            <span>Total Person</span>
                                        </span>
                                    </div>
                                    <input type="number" name="total_person" value="1">
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="hero-button">
                                <span class="hero-text24 Body16pxBold">
                                    <span>Book A Table</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
      
    @endsection
</body>
</html>