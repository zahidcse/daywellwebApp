<footer class="main-footer">
    <div class="footer-content">
        <!-- Column 1: Logo -->
        <div class="footer-column logo-column">
            <img src="{{ asset('assets/images/Daywell App logo.png') }}" alt="Daywell Logo" class="footer-logo">
        </div>

        <!-- Column 2: Address -->
        <div class="footer-column address-column">
            <p class="address-text">
                Totowa, New Jersey<br>
                <!-- 5123 Market St. #22B<br>
                44635 -->
            </p>
            <div class="social-icons">
                <a href="https://web.facebook.com/DawellApp" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.youtube.com/@daywellapp" class="social-icon"><i class="fab fa-youtube"></i></a>
                <a href="https://www.instagram.com/daywellapp/" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@daywellapp?_t=ZT-8tzJL1MGvaF&_r=1" class="social-icon"><i
                        class="fab fa-tiktok"></i></a>
                <a href="https://www.linkedin.com/company/daywell-app/?viewAsMember=true" class="social-icon"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="contact-info">
                <span class="phone-icon"><i class="fas fa-phone"></i></span>201-519-2780
            </div>
            <div class="email-info">
                <span class="email-icon"><i class="fas fa-envelope"></i></span>info@daywellapp.com
            </div>
        </div>

        <!-- Column 3: Menu -->
        <div class="footer-column menu-column">
            <ul class="footer-menu">
                <li><a href="#">Home</a></li>
                <li><a href="https://daywellapp.com/privacy">Privacy</a></li>
                <li><a href="https://daywellapp.com/terms">Terms</a></li>
                <li><a href="Contact-us.html">Contact</a></li>
            </ul>
        </div>

        <!-- Column 4: Social -->
        <div class="footer-column social-column">
            <ul class="social-links">
                <li><a href="https://web.facebook.com/DawellApp">Facebook</a></li>
                <li><a href="https://www.linkedin.com/company/daywell-app/?viewAsMember=true">Linkedin</a></li>
                <li><a href="https://www.instagram.com/daywellapp/">Instagram</a></li>
            </ul>
        </div>

        <!-- Copyright row -->
        <div class="copyright-row">
            <span class="copyright">© 2025 Daywell. All rights reserved.</span>
        </div>

        <!-- Back to top button -->
        <button class="back-to-top">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 19V5M5 12l7-7 7 7" />
            </svg>
        </button>
    </div>
</footer>


<!-- ================ Custom Popup ================ -->


<div id="customPopupOverlay" class="custom-popup-overlay">
    <div class="custom-popup-box">
        <button class="custom-close-btn" onclick="closeCustomPopup()">
            <i class="fas fa-times"></i>
        </button>

        <h2 class="custom-popup-title">Sign Up for Early Access</h2>
        <p class="custom-popup-description">
            Get exclusive updates on launch, features, and more.
        </p>

        <form id="customEarlyAccessForm" class="custom-popup-form">
            <input type="email" id="customEmailInput" placeholder="name@example.com" required>

            <button type="submit" class="submit-btn" id="signupButton">
                <span class="button-text">JOIN THE WAITLIST</span>
                <span class="spinner" style="display: none;">
                </span>
            </button>
        </form>
    </div>
</div>




<!-- ====================== Custom Alert System ====================== -->


<div class="custom-alert-overlay" style="display: none;">
    <div class="custom-alert-box">
        <div class="alert-header">
            <span class="alert-close">&times;</span>
        </div>
        <div class="alert-body">
            <svg class="alert-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48"
                height="48">
                <path fill="#fd9b32"
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z" />
            </svg>
            <h3 class="alert-title" style="color: #414141;">New Message!</h3>
            <p class="alert-message" style="color: #666;"></p>
        </div>
        <div class="alert-footer">
            <button class="alert-confirm" style="background-color: #fd9b32; color: white;">OK</button>
        </div>
    </div>
</div>

<!-- Popup HTML (put this near the end of your body) -->
<div class="popup-overlay" id="popupOverlay">
    <div class="popup-container">
        <div class="popup-content">
            <button class="close-popup">
                <i class="fas fa-times"></i>
            </button>
            <form class="signup-form" id="signupForm">
                <h2 class="popup-title">Be The First To Try Daywell!</h2>

                <div class="form-group">
                    <div class="name-fields">
                        <div class="input-wrapper half-width">
                            <input type="text" id="firstName" name="firstName" placeholder="First Name"
                                class="form-input" required>
                            <div class="error-message"></div>
                        </div>
                        <div class="input-wrapper half-width">
                            <input type="text" id="lastName" name="lastName" placeholder="Last Name"
                                class="form-input" required>
                            <div class="error-message"></div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" placeholder="Email Address"
                            class="form-input" required>
                        <div class="error-message"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="password" id="password" name="password" placeholder="Password"
                            class="form-input" required minlength="8">
                        <div class="error-message"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="password" id="confirmPassword" name="confirmPassword"
                            placeholder="Confirm Password" class="form-input" required>
                        <div class="error-message"></div>
                    </div>
                </div>

                <button type="submit" class="submit-btn" id="submitBtn">
                    <span class="button-text">JOIN THE WAITLIST</span>
                    <span class="spinner">
                        <i class="fas fa-spinner fa-spin"></i>
                    </span>
                </button>
            </form>
        </div>
    </div>
</div>



<!-- Partner Popup Section -->
<div class="partner-popup-overlay" id="partnerPopup">
    <div class="partner-popup-container">
        <div class="partner-popup-close">
            <i class="fas fa-times"></i>
        </div>

        <h1 class="partner-popup-title">Partner with <span>Daywell</span></h1>
        <p class="partner-popup-subtitle">Are you a health org, gym, wellness creator, or college program? </br>
            <span>Let's get you started!</span>
        </p>

        <div class="partner-options-container">
            <a href="{{ route('referFriend') }}" class="partner-option-box" id="Referal-form">
                <div class="partner-option-icon">
                    <img src="{{ asset('assets/images/refer-friend-icon.png') }}" alt="Referral">
                </div>
                <h3 class="partner-option-title">Refer a Friend</h3>
                <p class="partner-option-description">Invite friends and earn rewards by sharing your unique link.</p>
            </a>

            <a href="{{ route('joinAffiliate') }}" class="partner-option-box" id="partner-affiliate-option">
                <div class="partner-option-icon">
                    <img src="{{ asset('assets/images/tabler_affiliate.png') }}" alt="Affiliate">
                </div>
                <h3 class="partner-option-title">Join Affiliate Program</h3>
                <p class="partner-option-description">Launch a Community Challenge, partner with Daywell, and grow your
                    community.</p>
            </a>
        </div>
    </div>
</div>

<!-- Bootstrap 5.3 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
