@extends('index')

@section('content')
    <style>
        /* Referral Form Styles */
        .referral-section {
            padding: 130px 20px;
            background-image: url('{{ asset('assets/images/Contact form background.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .referral-container {
            max-width: 470px;
            width: 100%;
            /* Add this to ensure it takes full width up to max-width */
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transform: translateY(-25px);
            /* Remove any transform/translate properties if present */
        }

        .referral-title {
            font-size: 35px;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }

        .referral-title span {
            color: #FD9B32;
        }

        .referral-subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 30px;
        }

        /* Updated Success Section Styles */
        .referral-success-container {
            max-width: 500px;
            width: 100%;
            /* Add this */
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: left;
        }

        .success-title {
            font-size: 35px;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
            text-align: left;
        }

        .success-message {
            font-size: 16px;
            color: #666;
            margin-bottom: 30px;
            text-align: left;
        }

        .referral-link-box {
            display: flex;
            align-items: center;
            background: #F8F8F8;
            border: 1px solid #FD9B32;
            border-radius: 8px;
            padding: 2px 15px;
            margin-bottom: 30px;
            text-align: left;
        }

        .referral-link-text {
            flex: 1;
            font-family: 'Courier New', monospace;
            font-size: 15px;
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: left;
        }

        .copy-link-btn {
            background: transparent;
            color: #FD9B32;
            border: none;
            border-radius: 6px;
            padding: 8px 15px;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s ease;
        }

        .copy-link-btn:hover {
            background: rgba(253, 155, 50, 0.1);
        }

        .social-share {
            margin-top: 20px;
        }

        .share-row {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .share-text {
            color: #333;
            font-size: 20px;
            font-weight: bold;
        }

        .share-buttons {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .share-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #FD9B32;
            font-size: 24px;
            background: transparent;
            transition: all 0.3s ease;
        }

        .share-btn:hover {
            transform: translateY(-1px);
        }

        @media (max-width: 768px) {

            .referral-container {
                transform: translateY(0px);
            }

            .referral-title {
                font-size: 25px;
            }


            .referral-section {
                padding: 60px 20px;
            }

            .referral-success-container {
                padding: 30px 20px;
            }

            .referral-link-box {
                flex-direction: column;
                align-items: flex-start;
            }

            .copy-link-btn {
                margin-top: 10px;
                width: 100%;
                justify-content: center;
            }

            .share-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
    <!-- Main Content Section -->
    <section class="referral-section">
        <div class="referral-container" id="referralFormContainer">
            <form class="referral-form" id="referralForm">
                <h2 class="referral-title">Invite your friends to <span>Daywell</span></h2>
                <p class="referral-subtitle">Enter your details to generate your personalized referral link.</p>

                <div class="form-group">
                    <label for="referral-email">Email Address</label>
                    <div class="input-wrapper">
                        <input type="email" id="referral-email" name="email" placeholder="@example.com"
                            class="form-input" required>
                        <img src="{{ asset('assets/images/contact form email field icon.svg') }}" alt="email icon"
                            class="input-icon">
                    </div>
                </div>

                <div class="form-group">
                    <label for="referral-name">First Name</label>
                    <div class="input-wrapper">
                        <input type="text" id="referral-name" name="name" placeholder="Your name" class="form-input"
                            required>
                        <img src="{{ asset('assets/images/contact form name field icon.svg') }}" alt="name icon"
                            class="input-icon">
                    </div>
                </div>

                <button type="submit" class="submit-btn">
                    <span>Get Link</span>
                </button>
            </form>
        </div>

        <!-- Success Section (hidden by default) -->
        <div class="referral-success-container" id="referralSuccessContainer" style="display: none;">
            <div class="referral-success-content" style="text-align: left;">
                <h2 class="success-title">Your Referral Link is Ready!</h2>
                <p class="success-message">Earn rewards and build your wellness community </br> together.</p>

                <div class="referral-link-box">
                    <span class="referral-link-text" id="generatedReferralLink">daywellapp.com/?ref=yourname123</span>
                    <button class="copy-link-btn" id="copyLinkBtn">
                        <i class="far fa-copy"></i>
                        <span>Copy Link</span>
                    </button>
                </div>

                <div class="social-share">
                    <div class="share-row">
                        <span class="share-text">Share via:</span>
                        <div class="share-buttons">
                            <a href="#" class="share-btn whatsapp" id="whatsappShare">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="#" class="share-btn sms" id="smsShare">
                                <i class="fas fa-sms"></i>
                            </a>
                            <a href="#" class="share-btn instagram" id="instagramShare">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle referral form submission
            const referralForm = document.getElementById('referralForm');
            const referralSuccess = document.getElementById('referralSuccessContainer');

            if (referralForm) {
                referralForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Get form values
                    const email = document.getElementById('referral-email').value;
                    const name = document.getElementById('referral-name').value;

                    // Generate referral code (simple version)
                    const refCode = name.toLowerCase().replace(/\s+/g, '') + Math.floor(100 + Math
                        .random() * 900);

                    // Update the referral link
                    document.getElementById('generatedReferralLink').textContent =
                        `daywellapp.com/?ref=${refCode}`;

                    // Set up share links
                    const shareText =
                        `Join me on Daywell! Track your wellness goals and earn rewards: daywellapp.com/?ref=${refCode}`;
                    document.getElementById('whatsappShare').href =
                        `https://wa.me/?text=${encodeURIComponent(shareText)}`;
                    document.getElementById('smsShare').href = `sms:?body=${encodeURIComponent(shareText)}`;
                    document.getElementById('instagramShare').href =
                        `https://www.instagram.com/?text=${encodeURIComponent(shareText)}`;

                    // Show success section
                    document.getElementById('referralFormContainer').style.display = 'none';
                    referralSuccess.style.display = 'block';
                });
            }

            // Handle copy link button
            const copyLinkBtn = document.getElementById('copyLinkBtn');
            if (copyLinkBtn) {
                copyLinkBtn.addEventListener('click', function() {
                    const linkText = document.getElementById('generatedReferralLink').textContent;
                    navigator.clipboard.writeText(linkText).then(function() {
                        const btn = document.getElementById('copyLinkBtn');
                        btn.innerHTML = '<i class="fas fa-check"></i><span>Copied!</span>';
                        setTimeout(function() {
                            btn.innerHTML =
                                '<i class="far fa-copy"></i><span>Copy Link</span>';
                        }, 2000);
                    });
                });
            }
        });
    </script>

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
