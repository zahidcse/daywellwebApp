@extends('index')
@section('content')
    {{-- <section class="features-section">
    <div class="container">
        <h2 class="features-section-text">Why Daywell is Unique</h2>

        <!-- Feature 1 -->
        <div class="feature-card-home">
            <img class="unicq-section-f" src="images/how day well.webp" alt="Photo Tracking">
            <div class="feature-content">
                <h3>Photo-Based Habit Tracking</h3>
                <p>Unlike traditional habit trackers that rely solely on checkboxes or text logs, our app allows users to capture their progress visually. By taking a photo of each task they complete, users create a powerful visual journal that documents their journey.</p>
            </div>
        </div>

        <!-- Feature 2 -->
        <div class="feature-card-home">
            <div class="feature-content">
                <h3>Positive Reinforcement</h3>
                <p>The app is designed to provide constant motivation through positive reinforcement. As users log their habits, they are encouraged to celebrate small wins and milestones visually. Whether it’s a fitness goal, a personal project, or a self-care routine.</p>
            </div>
            <img class="unicq-section-s" src="{{ asset('images/how day well 2.webp') }}" alt="Milestones">
        </div>

        <!-- Feature 3 -->
        <div class="feature-card-home">
            <img class="unicq-section-t" src="{{ asset('images/last image.png') }}" alt="Custom Journals">
            <div class="feature-content">
                <h3>Customizable Journals</h3>
                <p>Our app takes habit tracking a step further with the ability to customize daily journals. Users can tailor their habit tracking experience by choosing specific goals, categories, or even sharing with others.</p>
            </div>
        </div>
        <!-- Feature 4 -->
        <div class="feature-card-home">
            <div class="feature-content">
                <h3>Daily Vision Board Planning</h3>
                <p>App helps you organize your day by setting clear goals and visualizing them. It provides tools to track activities like Move, Nourish, Learn, and Play, encouraging a balanced and mindful lifestyle.</p>
            </div>
            <img class="unicq-section-s" src="{{ asset('images/Daily Vision Board Planning.png') }}" alt="Milestones">
        </div>
    </div>
</section>


<section class="testimonials-section">
    <div class="container">
        <!-- <h2 class="text-center mb-5 display-4">User Testimonials</h2> -->
        <div class="testimonial-grid">
            <!-- Original Testimonials Here -->
           <!-- Testimonials Section -->
<section class="testimonials-section">
  <div class="container">
      <h2 class="testimonials-section-text">What People Are Saying</h2>
      <div class="testimonial-grid">
          <!-- Testimonial 1 -->
          <div class="testimonial-card">
              <div class="stars">★★★★★</div>
              <p class="testimonial-text">
                  "I’ve been using this app for a few weeks now, and it’s been a game-changer for my fitness routine! The photo journaling feature is so motivating—seeing my progress visually really helps keep me on track. It’s not just about logging workouts; it’s about celebrating each small win."
              </p>
              <div class="testimonial-author">
                  <span class="author-name">Sarah M.</span>
                  <span class="author-role">Fitness Coach</span>
              </div>
          </div>

          <!-- Testimonial 2 -->
          <div class="testimonial-card">
              <div class="stars">★★★★★</div>
              <p class="testimonial-text">
                  "As someone juggling a full-time job and personal projects, I needed a way to stay consistent without overcomplicating things. This app is perfect! I love how easy it is to capture my daily habits with just a photo. It makes productivity feel more rewarding, and I’m finally making progress on my goals!"
              </p>
              <div class="testimonial-author">
                  <span class="author-name">James L.</span>
                  <span class="author-role">Marketing Executive</span>
              </div>
          </div>

          <!-- Testimonial 3 -->
          <div class="testimonial-card">
              <div class="stars">★★★★★</div>
              <p class="testimonial-text">
                  "I struggle with staying motivated, especially when it comes to studying and daily tasks. This app helps me stay accountable. It’s simple to use—just snap a picture of what I’ve accomplished, and it feels like I’m ticking off more than just boxes."
              </p>
              <div class="testimonial-author">
                  <span class="author-name">Emily R.</span>
                  <span class="author-role">College Student</span>
              </div>
          </div>

          <!-- Testimonial 4 -->
          <div class="testimonial-card">
              <div class="stars">★★★★★</div>
              <p class="testimonial-text">
                  "I’ve tried many habit trackers, but this one stands out. The visual element really makes a difference. Whether it’s yoga, meditation, or my daily affirmations, I get to capture each step in my wellness journey. It’s a fun and motivating way to stay focused on my mental and physical health."
              </p>
              <div class="testimonial-author">
                  <span class="author-name">Tina P.</span>
                  <span class="author-role">Wellness Blogger</span>
              </div>
          </div>

          <!-- Testimonial 5 -->
          <div class="testimonial-card">
              <div class="stars">★★★★★</div>
              <p class="testimonial-text">
                  "As a mom, I’m always balancing a million things. This app helps me keep track of my daily habits, whether it’s exercise, cooking a healthy meal, or spending quality time with the kids. I love how simple it is to use and how each photo reminds me of the progress I’m making."
              </p>
              <div class="testimonial-author">
                  <span class="author-name">Laura K.</span>
                  <span class="author-role">Stay-at-Home Mom</span>
              </div>
          </div>

          <!-- Testimonial 6 -->
          <div class="testimonial-card">
              <div class="stars">★★★★★</div>
              <p class="testimonial-text">
                  "This app is exactly what I needed to stay on track with my personal goals. The ability to track habits with photos not only motivates me but also gives me a sense of pride when I see how far I’ve come."
              </p>
              <div class="testimonial-author">
                  <span class="author-name">David S.</span>
                  <span class="author-role">Entrepreneur</span>
              </div>
          </div>
      </div>
  </div>
</section>
            <!-- Repeat for all testimonials -->
        </div>
    </div>
</section>

<section class="video-section">
    <div class="container">
        <h2 class="Demo-text">How To Use Daywell?</h2>
        <div class="video-container">
            <iframe width="100%" height="450" src="https://www.youtube.com/embed/XHOmBV4js_E" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</section> --}}

    <!-- Banner Section -->
    <section class="header-banner-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-1">
                    <div class="banner-image">
                        <img src="{{ asset('assets/images/banner app image.png') }}" class="img-fluid"
                            alt="Daywell App Preview">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-0">
                    <div class="banner-content">
                        <h1 class="banner-title">Your Life</h1>
                        <h1 class="banner-title primary-color">Your Vision</h1>
                        <h2 class="banner-subtitle">One Snap at a Time</h2>
                        <div class="title-line"></div>
                        <p class="banner-text">A visual habit journal to build your lifestyle vision, one photo at a time.
                        </p>
                        <div class="download-buttons">
                            <a href="#"><img src="{{ asset('assets/images/app download.png') }}"
                                    alt="Download on App Store"></a>
                            <a href="#"><img src="{{ asset('assets/images/playstore download.png') }}"
                                    alt="Download on Google Play"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Image -->
                <div class="col-lg-6 feature-image-col">
                    <img src="{{ asset('assets/images/feature-image.png') }}" alt="App Feature" class="feature-image">
                </div>

                <!-- Right Side Content -->
                <div class="col-lg-6 feature-content-col">
                    <div class="feature-content">
                        <h2 class="feature-title">Introducing <span class="highlight-text">Daywell App</span></h2>
                        <div class="feature-line"></div>
                        <p class="feature-text">
                            Daywell is your ultimate companion for building positive habits, capturing memories, and
                            tracking progress every single day.
                        </p>
                        <button class="read-more-btn" id="readMoreBtn">Read More</button>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Features Section (Image Right) -->
    <section class="features-section image-right">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Content -->
                <div class="col-lg-6 feature-content-col">
                    <div cla-subheass="feature-content">
                        <h3 class="featureding">INSPIRATION INTO ACTION</h3>
                        <h2 class="feature-title">Your Camera Roll Meets <span class="highlight-text">Your Vision
                                Board</span></h2>
                        <div class="feature-line"></div>
                        <p class="feature-text">
                            Daywell is your personal space to turn inspiration into action. Upload your goals, your
                            motivation, and the images that inspire you, then watch your vision board evolve in
                            real-time.<br>
                            Whether it's a fitness goal, a creative dream, or just something that sparks joy, Daywell helps
                            you stay aligned with what you want to manifest. Your journey, your style.
                        </p>
                    </div>
                </div>

                <!-- Right Side Image -->
                <div class="col-lg-6 feature-image-col">
                    <img src="{{ asset('assets/images/feature-image 2.png') }}" alt="App Feature" class="feature-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Wins Section -->
    <section class="wins-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Capture Your Wins</h2>
                <h3 class="section-subtitle">Big or Small</h3>
                <div class="title-bar"></div>
                <p class="section-description">
                    From hitting that workout milestone to finishing a creative project, Daywell makes it easy to celebrate
                    your daily wins. Every win gets a spotlight, no matter how small. It's a visual diary of your personal
                    mission, helping you track progress and stay inspired. And when you need a reminder to keep going, just
                    look back at your snaps + notes and feel that inspiration hit.
                </p>
            </div>

            <!-- Timeline -->
            <div class="timeline-container">
                <div class="timeline">
                    <div class="timeline-step">
                        <div class="timeline-circle">1</div>
                        <div class="timeline-connector"></div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-circle">2</div>
                        <div class="timeline-connector"></div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-circle">3</div>
                    </div>
                </div>
                <div class="timeline-captions">
                    <span>Snap a photo</span>
                    <span>Add a caption</span>
                    <span>Reflect on your journey</span>
                </div>
            </div>

            <!-- Original Mobile Screens (shown above 800px) -->
            <div class="mobile-screens">
                <img src="{{ asset('assets/images/win 2.png') }}" alt="Mobile Screens" class="mobile-screens-image">
            </div>

            <!-- New Additional Image (shown below 800px) -->
            <div class="additional-image">
                <img src="{{ asset('assets/images/win 2 mobile.png') }}" alt="Additional Image"
                    class="additional-image-img">
            </div>
        </div>
    </section>

    <!-- Progress Section -->
    <section class="progress-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Image -->
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/progress image.png') }}" alt="Progress Tracking"
                        class="progress-image">
                </div>

                <!-- Right Side Content -->
                <div class="col-lg-6">
                    <div class="progress-content">
                        <h4 class="progress-subheading">TRACK YOUR PROGRESS</h4>
                        <h2 class="progress-heading">Build Your Personalized <span class="highlight-text">Photo
                                Journals</span></h2>

                        <ul class="progress-features">
                            <li>
                                <span class="feature-icon">✓</span>
                                <span>Create your own customized habit photo journals, from health goals to creativity,
                                    self-care, or even just learning something new.</span>
                            </li>
                            <li>
                                <span class="feature-icon">✓</span>
                                <span>Choose from pre-made boards focused on movement, nourishment, hydration, nature, play,
                                    learning, and rest.</span>
                            </li>
                            <li>
                                <span class="feature-icon">✓</span>
                                <span>You can even add your own categories, so your photo journal is all about the habits
                                    that matter most to you.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1 -->
    <section class="custom-section section-1">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Text -->
                <div class="col-lg-6">
                    <div class="section-content">
                        <h4 class="section-subheading">VISUAL STORY</h4>
                        <h2 class="section-heading">Photo-Based </br> <span class="highlight">Habit Tracking</span></h2>
                        <div class="divider-line"></div>
                        <p class="section-paragraph">
                            Say goodbye to old-school checkboxes. Easily log your daily habits and achievements with photos.
                            Whether you're hydrating, socializing, or learning something new, just take a pic and add it to
                            your journal. It's way more fun to see your progress in photos plus, it turns your journey into
                            a visual story. Snap your goals into focus!
                        </p>
                    </div>
                </div>

                <!-- Right Side Image -->
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/visual story section.png') }}" alt="Visual Story"
                        class="section-image">
                </div>
            </div>
        </div>
    </section>


    <!-- Section 2 -->
    <section class="custom-section section-2">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Image -->
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/track your progress section.png') }}" alt="Progress Tracking"
                        class="section-image">
                </div>

                <!-- Right Side Text -->
                <div class="col-lg-6">
                    <div class="section-content">
                        <h4 class="section-subheading">TRACK YOUR PROGRESS</h4>
                        <h2 class="section-heading">Calendar-Based <span class="highlight">Mission Rewards</span></h2>
                        <p class="section-paragraph">
                            Set personalized missions with a start and end date, and track your progress on your calendar.
                            Every snap you take towards your goal lights up your streak. Hit your daily targets, and you'll
                            unlock a spinning wheel of rewards to celebrate your consistency. The more streaks you stack,
                            the more personalized your rewards from fun challenges to self-care prompts that keep you on
                            track and feeling good.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Section 3 -->
    <section class="custom-section section-3">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Text -->
                <div class="col-lg-6">
                    <div class="section-content">
                        <h4 class="section-subheading">FULL CONTROL</h4>
                        <h2 class="section-heading">Share Your Journey, <span class="highlight">Or Keep It Personal</span>
                        </h2>
                        <div class="divider-line"></div>
                        <p class="section-paragraph">
                            Daywell is all about your journey. You can share specific photo journals with friends for
                            support, accountability, or just a fun way to stay connected. You control what you share, and
                            who sees your progress. Whether you prefer to keep your milestones personal or share them with
                            others, Daywell offers the flexibility to do both!
                        </p>
                    </div>
                </div>

                <!-- Right Side Image -->
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/full control section.png') }}" alt="Privacy Control"
                        class="section-image">
                </div>
            </div>
        </div>
    </section>


    <!-- How To Use Section -->
    <section class="how-to-use-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="section-title-how-to-use">How To Use <span class="highlight">Daywell</span></h2>

                    <!-- YouTube Video Embed -->
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/fyJfdgNzs-M" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="youtube-video">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Growing Community Section -->
    <section class="community-section">
        <div class="container">
            <div class="section-header">
                <h4 class="section-subheading">GROWING COMMUNITY</h4>
                <h2 class="section-heading">What Are <span class="highlight">People</span> Saying</h2>
                <div class="divider-line"></div>
            </div>

            <div class="progress-row">
                <!-- First Progress Circle -->
                <div class="progress-item">
                    <div class="progress-item">
                        <div class="progress-circle-container">
                            <div class="progress-circle" data-percent="100">
                                <svg class="progress-icon" width="24" height="24" viewBox="0 0 24 24">
                                    <image href="{{ asset('assets/images/rating 1.png') }}" width="24"
                                        height="24" />
                                </svg>
                            </div>
                        </div>
                        <div class="progress-content">
                            <h3 class="progress-title">Real habits. Real photos. Real progress.</h3>
                            <p class="progress-description">Tested and loved by </br> our early users.</p>
                        </div>
                    </div>

                    <!-- Second Progress Circle -->
                    <div class="progress-item">
                        <div class="progress-circle-container">
                            <div class="progress-circle-container">
                                <div class="progress-circle" data-percent="100">
                                    <svg class="progress-icon" width="24" height="24" viewBox="0 0 24 24">
                                        <image href="{{ asset('assets/images/download 1.png') }}" width="24"
                                            height="24" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="progress-content">
                            <h3 class="progress-title">Growing community</h3>
                            <p class="progress-description">With Real Habits, Real photos, </br> and Real progress.</p>
                        </div>
                    </div>
                </div>
            </div>

            <section class="testimonial-section">
                <div class="testimonial-container">
                    <div class="slider-wrapper" id="sliderWrapper">
                        <!-- Testimonial Cards (same as before) -->
                        <!-- Testimonial Card 1 -->
                        <div class="testimonial-card">
                            <div class="user-image">
                                <img src="{{ asset('assets/images/Sarah.png') }}" alt="User">
                            </div>
                            <h3 class="testimonial-title">Sarah M.</h3>
                            <div class="stars">★★★★★</div>
                            <p class="testimonial-text">"I've been using this app for a few weeks now, and it's been a
                                game-changer for my fitness routine! The photo journaling feature is so motivating—seeing my
                                progress visually really helps keep me on track. It's not just about logging workouts; it's
                                about celebrating each small win."</p>
                            <div class="testimonial-time">Fitness Coach</div>
                        </div>

                        <!-- Testimonial Card 2 -->
                        <div class="testimonial-card active">
                            <div class="user-image">
                                <img src="{{ asset('assets/images/James.png') }}" alt="User">
                            </div>
                            <h3 class="testimonial-title">James L.</h3>
                            <div class="stars">★★★★★</div>
                            <p class="testimonial-text">"As someone juggling a full-time job and personal projects, I
                                needed a way to stay consistent without overcomplicating things. This app is perfect! I love
                                how easy it is to capture my daily habits with just a photo. It makes productivity feel more
                                rewarding, and I'm finally making progress on my goals!"</p>
                            <div class="testimonial-time">Marketing Executive</div>
                        </div>

                        <!-- Testimonial Card 3 -->
                        <div class="testimonial-card">
                            <div class="user-image">
                                <img src="{{ asset('assets/images/Emily.png') }}" alt="User">
                            </div>
                            <h3 class="testimonial-title">Emily R.</h3>
                            <div class="stars">★★★★★</div>
                            <p class="testimonial-text">"I struggle with staying motivated, especially when it comes to
                                studying and daily tasks. This app helps me stay accountable. It's simple to use—just snap a
                                picture of what I've accomplished, and it feels like I'm ticking off more than just boxes."
                            </p>
                            <div class="testimonial-time">College Student</div>
                        </div>

                        <!-- Testimonial Card 4 -->
                        <div class="testimonial-card">
                            <div class="user-image">
                                <img src="{{ asset('assets/images/Tina.png') }}" alt="User">
                            </div>
                            <h3 class="testimonial-title">Tina P.</h3>
                            <div class="stars">★★★★★</div>
                            <p class="testimonial-text">"I've tried many habit trackers, but this one stands out. The
                                visual element really makes a difference. Whether it's yoga, meditation, or my daily
                                affirmations, I get to capture each step in my wellness journey. It's a fun and motivating
                                way to stay focused on my mental and physical health."</p>
                            <div class="testimonial-time">Wellness Blogger</div>
                        </div>

                        <!-- Testimonial Card 5 -->
                        <div class="testimonial-card">
                            <div class="user-image">
                                <img src="{{ asset('assets/images/Laura.png') }}" alt="User">
                            </div>
                            <h3 class="testimonial-title">Laura K.</h3>
                            <div class="stars">★★★★★</div>
                            <p class="testimonial-text">"As a mom, I'm always balancing a million things. This app helps me
                                keep track of my daily habits, whether it's exercise, cooking a healthy meal, or spending
                                quality time with the kids. I love how simple it is to use and how each photo reminds me of
                                the progress I'm making."</p>
                            <div class="testimonial-time">Stay-at-Home Mom</div>
                        </div>

                        <!-- Testimonial Card 6 -->
                        <div class="testimonial-card">
                            <div class="user-image">
                                <img src="{{ asset('assets/images/David.png') }}" alt="User">
                            </div>
                            <h3 class="testimonial-title">David S.</h3>
                            <div class="stars">★★★★★</div>
                            <p class="testimonial-text">"This app is exactly what I needed to stay on track with my
                                personal goals. The ability to track habits with photos not only motivates me but also gives
                                me a sense of pride when I see how far I've come."</p>
                            <div class="testimonial-time">Entrepreneur</div>
                        </div>
                    </div>
                </div>

                <!-- Arrows positioned outside the section -->
                <button class="slider-arrow prev-arrow" id="prevButton">
                    ❮
                </button>
                <button class="slider-arrow next-arrow" id="nextButton">
                    ❯
                </button>
            </section>



            <section class="main-section">
                <div class="content-container">
                    <div class="left-content">
                        <h1 class="main-title">Snap Your Life</h1>
                        <h1 class="sub-title">Into <span class="focus">Focus</span></h1>
                        <p class="description">Join Daywell today!<br></p>
                        <div class="download-buttons">
                            <img src="{{ asset('assets/images/app download.png') }}" alt="Play Store">
                            <img src="{{ asset('assets/images/playstore download.png') }}" alt="App Store">
                        </div>
                    </div>
                    <div class="right-image">
                        <img src="{{ asset('assets/images/App Preview.png') }}" alt="App Preview">
                    </div>
                </div>
            </section>
        @endsection
