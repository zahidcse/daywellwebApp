{{-- <section class="signup-section">
    <div class="signup-container">
      <form class="signup-form" action="{{ route('contactUsSendMsg') }}" method="POST">
        @csrf
        <h2>Contact Us!</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="margin-left: 20px;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" required aria-label="Name" />
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required aria-label="Email Address" />
        <textarea name="message" id="" cols="30" rows="10" placeholder="Write Something..."></textarea>
        <button type="submit">Send</button>
      </form>
    </div>

    <!-- Wave Shape -->
    <div class="wave-shape">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#f1912d">
        <path d="M0 99v-99c134.3 0 153.7 99 296 99H0Z" opacity=".5"></path>
        <path d="M1000 96v-86C833.3 10 833.3 96.4 666.7 96.4S500 10 333.3 10 166.7 96 0 96h1000Z" opacity=".5"></path>
        <path d="M617 99v-86C372 10 384 99 196 99h421Z" opacity=".5"></path>
        <path d="M1000 100H0v-52C62.5 72 125 96 250 96c250 0 250-96 500-96 125 0 187.5 24 250 48V100Z"></path>
      </svg>
    </div>
  </section> --}}
@extends('index')
@section('content')
    <section class="contact-section"
        style="background-image: url('{{ asset('assets/images/Contact form background.png') }}');">
        <div class="contact-container">
            <form class="contact-form" action="{{ route('contactUsSendMsg') }}" method="POST">
                @csrf
                <h2 class="contact-title">Contact us!</h2>
                <p class="contact-subtitle">Have questions or need support on your wellness journey? We're here to help!</p>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="margin-left: 20px;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="@example.com" class="form-input">
                        <img src="{{ asset('assets/images/contact form email field icon.svg') }}" alt="email icon"
                            class="input-icon">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <div class="input-wrapper">
                        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Your name" class="form-input">
                        <img src="{{ asset('assets/images/contact form name field icon.svg') }}" alt="name icon"
                            class="input-icon">
                    </div>
                </div>

                <div class="form-group">
                    <label for="message">Send your message</label>
                    <textarea id="message" name="message" placeholder="Let us know your questions..." class="form-input textarea-input"
                        rows="2"></textarea>
                </div>

                <button type="submit" class="submit-btn">
                    <span>Send</span>
                </button>
            </form>
        </div>
    </section>


    <script>
        /// ======================== partner popup script start =======================
        document.addEventListener('DOMContentLoaded', function() {
            // Get elements
            const partnerBtn = document.getElementById('partnerBtn');
            const partnerPopup = document.getElementById('partnerPopup');
            const closeBtn = document.querySelector('.partner-popup-close');

            // Show popup when button is clicked
            if (partnerBtn) {
                partnerBtn.addEventListener('click', function() {
                    partnerPopup.style.display = 'flex';
                });
            }

            // Close popup when X is clicked
            if (closeBtn) {
                closeBtn.addEventListener('click', function() {
                    partnerPopup.style.display = 'none';
                });
            }

            // Close popup when clicking outside
            if (partnerPopup) {
                partnerPopup.addEventListener('click', function(e) {
                    if (e.target === partnerPopup) {
                        partnerPopup.style.display = 'none';
                    }
                });
            }

            // Removed the affiliate option click handler since it's now a direct link
        });
        // ======================== partner popup script end =======================
    </script>
@endsection
