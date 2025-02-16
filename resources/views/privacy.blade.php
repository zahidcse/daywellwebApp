
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DayWell - Privacy</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<!-- Header Section -->
<header class="main-header2">
    <a href="{{ route('home') }}"><img src="{{ asset('images/Ahs Edu (21).png') }}" alt="Logo" class="brand-logo"></a>
</header>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <h2 class="features-section-text">Why Daywell is Unique</h2>
        <!-- Feature 1 -->
        <div class="feature-card">
            <img class="unicq-section-f" src="images/how day well.webp" alt="Photo Tracking">
            <div class="feature-content">
                <h3>Photo-Based Habit Tracking</h3>
                <p>Unlike traditional habit trackers that rely solely on checkboxes or text logs, our app allows users to capture their progress visually. By taking a photo of each task they complete, users create a powerful visual journal that documents their journey.</p>
            </div>
        </div>

        <!-- Feature 2 -->
        <div class="feature-card">
            <div class="feature-content">
                <h3>Positive Reinforcement</h3>
                <p>The app is designed to provide constant motivation through positive reinforcement. As users log their habits, they are encouraged to celebrate small wins and milestones visually. Whether it’s a fitness goal, a personal project, or a self-care routine.</p>
            </div>
            <img class="unicq-section-s" src="{{ asset('images/how day well 2.webp') }}" alt="Milestones">
        </div>

        <!-- Feature 3 -->
        <div class="feature-card">
            <img class="unicq-section-t" src="{{ asset('images/last image.png') }}" alt="Custom Journals">
            <div class="feature-content">
                <h3>Customizable Journals</h3>
                <p>Our app takes habit tracking a step further with the ability to customize daily journals. Users can tailor their habit tracking experience by choosing specific goals, categories, or even sharing with others.</p>
            </div>
        </div>
        <!-- Feature 4 -->
        <div class="feature-card">
            <div class="feature-content">
                <h3>Daily Vision Board Planning</h3>
                <p>App helps you organize your day by setting clear goals and visualizing them. It provides tools to track activities like Move, Nourish, Learn, and Play, encouraging a balanced and mindful lifestyle.</p>
            </div>
            <img class="unicq-section-s" src="{{ asset('images/Daily Vision Board Planning.png') }}" alt="Milestones">
        </div>
    </div>
</section>


@include('body.footer')
