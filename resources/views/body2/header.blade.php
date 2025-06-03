<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DayWell - Modern Habit Tracker</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<!-- Header Section -->
<header class="main-header">
    <a href="{{ route('home') }}"><img src="{{ asset('images/Ahs Edu (21).png') }}" alt="Logo" class="brand-logo"></a>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-heading">Daily Habit Photo Journal & Tracker</h1>
            <p class="lead">Sign Up Now for Exclusive Early Access</p>

            <div class="app-badges mt-4">
                <a href="#"><img src="{{ asset('images/image play1.webp') }}" alt="Google Play"></a>
                <a href="#"><img src="{{ asset('images/image play2.webp') }}" alt="App Store"></a>
            </div>

            <div class="cta-buttons mt-5">
                <a href="{{ route('register') }}" class="btn btn-dark btn-lg">Sign Up Free</a>
                <a href="{{ route('register-affiliate') }}" class="btn btn-outline-light btn-lg">Become Affiliate</a>
            </div>P

            <div class="phone-mockups">
                <img src="{{ asset('images/mobile image 1.webp') }}" alt="App Preview 1">
                <img src="{{ asset('images/centre.png') }}" alt="App Preview 2">
                <img src="{{ asset('images/mobile image another 3.webp') }}" alt="App Preview 3">
            </div>
        </div>
    </div>
</header>
