<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <title>Our Menu</title>
</head>
<body>
    

@extends('layout')

@section('content')
    
    <div class="hero-container">
        <div class="hero-hero">
            <div class="hero-form">
    <div class="menu-container">
        @foreach($menuItems as $menuItem)
            <div class="add-item">
                <div class="img"><img src="{{ asset('images/menu/' . $menuItem->image) }}" alt="{{ $menuItem->name }}"></div>
                <h3 class="name">{{ $menuItem->name }}</h3>
                <p class="red-test">${{ $menuItem->price }}</p>
                <p class="desc">{{ $menuItem->description }}</p>
                
                @if(auth()->user() && auth()->user()->isAdmin())
                    <form action="{{ route('menu.update', $menuItem->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <label for="name">UpdateName:</label>
                        <input type="text" name="name" value="{{ $menuItem->name }}">
                        <label for="name">UpdatePrice:</label>
                        <input type="text" name="price" value="{{ $menuItem->price }}">
                        <label for="name">UpdateDescription:</label>
                        <input type="text" name="description" value="{{ $menuItem->description }}">
                        <label for="name">UpdateImage:</label>
                        <input type="file" name="image" accept="image/*" placeholder="Image" value="{{$menuItem->image}}">

                        <input type="submit" value="Update">
                    </form>
                    <form action="{{ route('menu.destroy', $menuItem->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                @endif
            </div>
        @endforeach
        
        @if(auth()->user() && auth()->user()->isAdmin())
            <div class="add-item">
                <h3>Add New Item</h3>
                <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="price" placeholder="Price">
                    <textarea name="description" placeholder="Description"></textarea>
                    <input type="file" name="image" accept="image/*" placeholder="Image">
                    <input type="submit" value="Add">
                </form>
            </div>
        @endif
    </div>
</div>
</div>
</div>
@endsection

</body>
</html>