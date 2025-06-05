<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daywell App — Snap. Track. Achieve</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/daywell favicon.png') }}" type="image/x-icon">
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('style2.css') }}"> --}}


</head>

<body>
    <!-- Header Section -->
    <header class="header" id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid px-0">
                    <a class="navbar-brand me-5" href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/Daywell App logo.png') }}" class="logo"
                            alt="Daywell App Logo">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu"
                        aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="mainMenu">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-4">
                            <li class="nav-item pe-4">
                                <a class="nav-link active" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item pe-4">
                                <a class="nav-link" href="{{ route('privacy') }}">Privacy</a>
                            </li>
                            <li class="nav-item pe-4">
                                <a class="nav-link" href="{{ route('terms') }}">Terms</a>
                            </li>
                            <li class="nav-item pe-4">
                                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                        <div class="header-buttons d-flex gap-3">
                            <button class="btn btn-primary-custom btn-custom" onclick="openCustomPopup()">Sign Up for
                                Early Access</button>
                            <button class="btn btn-outline-custom btn-custom" id="partnerBtn">Partner with
                                Daywell</button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
