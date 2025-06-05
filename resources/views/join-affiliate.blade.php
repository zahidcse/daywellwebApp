@extends('index')

@section('content')
    <style>
        /* Form Styles */
        .referral-section {
            padding: 150px 20px;
            background-image: url('{{ asset('assets/images/Contact form background.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .referral-container {
            max-width: 700px;
            /* Increased width */
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transform: translateY(-70px);
        }

        .referral-title {
            font-size: 28px;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
            text-align: left;
        }

        .referral-subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 30px;
            text-align: left;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #333;
        }

        .input-wrapper {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 12px 15px 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            border-color: #FD9B32;
            outline: none;
            box-shadow: 0 0 0 2px rgba(253, 155, 50, 0.2);
        }

        .input-icon {
            position: absolute;
            right: 10px;
            /* Adjusted */
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            /* Smaller */
            height: 16px;
            /* Smaller */
        }

        .half-width {
            width: 49.5%;
            display: inline-block;
        }

        .half-width:first-child {
            margin-right: 4%;
        }

        .custom-dropdown {
            position: relative;
            width: 100%;
            font-family: inherit;
        }

        .dropdown-btn {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #fff;
            font-size: 15px;
            cursor: pointer;
            text-align: left;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23333' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 16px 12px;
        }

        .dropdown-list {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 5px 0 0;
            padding: 0;
            list-style: none;
            background: #fff;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
        }

        .dropdown-list li {
            padding: 10px 15px;
            cursor: pointer;
            border-bottom: 1px solid #ddd;
        }

        .dropdown-list li:hover {
            background-color: #FD9B32;
            color: #fff;
        }



        .checkbox-group {
            margin: 15px 0;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .checkbox-item {
            display: block;
            position: relative;
            padding-left: 30px;
            margin-bottom: 0;
            cursor: pointer;
            font-size: 15px;
            user-select: none;
            width: calc(50% - 15px);
            /* Two items per row */
        }

        .checkbox-item input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            border: 1px solid #ddd;
            border-radius: 7px;
            background-color: transparent;
        }

        .checkbox-item:hover input~.checkmark {
            border-color: #FD9B32;
        }

        .checkbox-item input:checked~.checkmark {
            background-color: transparent;
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .checkbox-item input:checked~.checkmark:after {
            display: block;
        }

        .checkbox-item .checkmark:after {
            left: 6px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid #FD9B32;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            min-height: 100px;
            resize: vertical;
        }

        textarea:focus {
            border-color: #FD9B32;
            outline: none;
            box-shadow: 0 0 0 2px rgba(253, 155, 50, 0.2);
        }

        textarea::placeholder {
            font-size: 14px;
            /* Smaller placeholder text */
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #FD9B32;
            color: white;
            border: none;
            border-radius: 50px;
            /* Rounded button */
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #E68A2A;
        }

        @media (max-width: 768px) {

            .referral-container {
                transform: translateY(0px);
            }

            .referral-section {
                padding: 60px 20px;
            }

            .half-width {
                width: 100%;
                display: block;
            }

            .half-width:first-child {
                margin-right: 0;
                margin-bottom: 20px;
            }

            .checkbox-item {
                width: 100%;
                /* Full width checkboxes on mobile */
            }
        }
    </style>

    <!-- Main Content Section -->
    <section class="referral-section">
        <div class="referral-container">
            <h2 class="referral-title">Affiliate Program Application</h2>
            <p class="referral-subtitle">Join the Daywell community! Complete this form to launch your Community Challenge or
                partnership, and we'll get back to you shortly.</p>

            <form id="affiliateForm" action="{{ route('registerAffiliate') }}" method="POST">
                @csrf
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
                <div class="form-group half-width">
                    <label for="full-name">Full Name</label>
                    <div class="input-wrapper">
                        <input type="text" id="full-name" name="full_name" placeholder="Your name" class="form-input"
                            required>
                        <img src="{{ asset('assets/images/contact form name field icon.svg') }}" alt="name icon"
                            class="input-icon">
                    </div>
                </div>

                <div class="form-group half-width">
                    <label for="email">Email Address</label>
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" placeholder="email@example.com"
                            class="form-input" required>
                        <img src="{{ asset('assets/images/contact form email field icon.svg') }}" alt="email icon"
                            class="input-icon">
                    </div>
                </div>

                <div class="form-group">
                    <label for="org-name">Organization Name</label>
                    <div class="input-wrapper">
                        <input type="text" id="org-name" name="organization_name" placeholder="Your organization name"
                            class="form-input" required>
                        <img src="{{ asset('assets/images/Organization- icon.png') }}" alt="organization icon"
                            class="input-icon">
                    </div>
                </div>

                <div class="form-group">
                    <label for="website">Website (Optional)</label>
                    <div class="input-wrapper">
                        <input type="url" id="website" name="website" placeholder="coolwebsite.com"
                            class="form-input">
                        <img src="{{ asset('assets/images/website-icon.png') }}" alt="website icon" class="input-icon">
                    </div>
                </div>

                <div class="form-group">
                    <label for="org-type">Organization Type</label>
                    <select name="organization_type" id="org-type" class="form-input organizationType" required>
                        <option value="health">Health Organization</option>
                        <option value="gym">Gym or Fitness Center</option>
                        <option value="college">College or University</option>
                        <option value="blogger">Blogger or Content Creator</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="community-size">Community size (Approximate number of members)</label>
                    <div class="input-wrapper">
                        <input type="number" id="community-size" name="community_size" placeholder="Community size"
                            class="form-input" required>
                        <img src="{{ asset('assets/images/community-icon.png') }}" alt="community icon" class="input-icon">
                    </div>
                </div>

                <div class="form-group">
                    <label>I'm Interested In (select all that apply)</label>
                    <div class="checkbox-group">
                        <label class="checkbox-item">
                            Launching a Community Challenge
                            <input type="checkbox" name="interested_in[]" value="community-challenge">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox-item">
                            Brand Partnership
                            <input type="checkbox" name="interested_in[]" value="brand-partnership">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox-item">
                            Referral Link & Commissions
                            <input type="checkbox" name="interested_in[]" value="referral">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox-item">
                            Embedding Daywell in Programs
                            <input type="checkbox" name="interested_in[]" value="embedding">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="goals">Tell us more about your goals (optional)</label>
                    <textarea id="goals" name="goals"
                        placeholder="Tell us more about your goals (e.g. Help students track mental health habits during finals week, Run 'Move 5 Minutes a Day' campaign for members, Help patients track meals and hydration to support heart health)"></textarea>
                </div>

                <button type="submit" class="submit-btn">Send application</button>
            </form>

        </div>
    </section>


    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle affiliate form submission
            const affiliateForm = document.getElementById('affiliateForm');

            if (affiliateForm) {
                affiliateForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    // Form submission logic would go here
                    alert('Application submitted successfully!');
                });
            }

            // Custom select focus effect
            const selectField = document.getElementById('org-type');
            if (selectField) {
                selectField.addEventListener('focus', function() {
                    this.style.borderColor = '#FD9B32';
                });

                selectField.addEventListener('blur', function() {
                    this.style.borderColor = '#ddd';
                });
            }
        });

        const dropdownBtn = document.querySelector('.dropdown-btn');
        const dropdownList = document.querySelector('.dropdown-list');
        const hiddenInput = document.getElementById('org-type');

        dropdownBtn.addEventListener('click', () => {
            dropdownList.style.display = dropdownList.style.display === 'block' ? 'none' : 'block';
        });

        dropdownList.querySelectorAll('li').forEach(item => {
            item.addEventListener('click', () => {
                dropdownBtn.textContent = item.textContent;
                hiddenInput.value = item.getAttribute('data-value');
                dropdownList.style.display = 'none';
            });
        });

        document.addEventListener('click', (e) => {
            if (!e.target.closest('.custom-dropdown')) {
                dropdownList.style.display = 'none';
            }
        });
    </script> --}}

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
