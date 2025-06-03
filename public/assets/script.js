
// ===================== Custom Alert Design Start ==========================
const originalAlert = window.alert;

window.alert = (message) => {
  const overlay = document.querySelector('.custom-alert-overlay');
  const alertMessage = document.querySelector('.alert-message');

  alertMessage.textContent = message;
  overlay.style.display = 'flex';

  const keyHandler = (e) => {
    if (e.key === 'Escape') closeAlert();
  };

  const closeAlert = () => {
    overlay.style.display = 'none';
    document.removeEventListener('keydown', keyHandler);
  };

  document.querySelector('.alert-close').onclick = closeAlert;
  document.querySelector('.alert-confirm').onclick = closeAlert;
  overlay.onclick = (e) => e.target === overlay && closeAlert();
  document.addEventListener('keydown', keyHandler);
};
// ===================== Custom Alert Design End ==========================


// ===================== Navbar & Smooth Scroll Start ==========================
document.addEventListener('DOMContentLoaded', function() {
  // Get all navigation links
  const navLinks = document.querySelectorAll('.nav-link');
  const menuToggle = document.getElementById('mainMenu');
  const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle: false});
  
  // Set active navigation item based on current page
  function setActiveNavItem() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    
    navLinks.forEach(link => {
      // Remove active class from all links first
      link.classList.remove('active');
      
      // Check if link href matches current page
      const linkPage = link.getAttribute('href').split('/').pop();
      if (linkPage === currentPage) {
        link.classList.add('active');
      }
      
      // Special case for home page
      if (currentPage === 'index.html' && link.getAttribute('href') === '#') {
        link.classList.add('active');
      }
    });
  }
  
  // Initialize active state
  setActiveNavItem();
  
  // Close mobile menu when a link is clicked
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      if(window.innerWidth < 992) bsCollapse.hide();
    });
  });
  
  // Handle window resize
  window.addEventListener('resize', function() {
    if(window.innerWidth >= 992) {
      bsCollapse.show();
    }
  });
  
  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      // Only prevent default if it's not the home link
      if(this.getAttribute('href') !== '#') {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      }
      
      // Set active state for clicked link
      navLinks.forEach(link => link.classList.remove('active'));
      this.classList.add('active');
    });
  });
  
  // Add scroll event listener for header background
  window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    if(window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
});
// ===================== Navbar & Smooth Scroll End ==========================


// ===================== Header Scroll Effect Start ==========================
window.addEventListener('scroll', function() {
  const header = document.querySelector('.header');
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});
// ===================== Header Scroll Effect End ==========================


// ===================== Progress Circle Animation Start ==========================
document.addEventListener('DOMContentLoaded', function() {
  const observerOptions = {
    threshold: 0.5
  };

  const animationConfig = {
    duration: 1000,
    easing: 'easeOutQuad'
  };

  const easingFunctions = {
    easeOutQuad: function(t) {
      return t * (2 - t);
    }
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const circle = entry.target;
        const targetPercent = parseInt(circle.getAttribute('data-percent'));
        let startTime = null;

        const animateProgress = (timestamp) => {
          if (!startTime) startTime = timestamp;
          const elapsed = timestamp - startTime;
          const progress = Math.min(elapsed / animationConfig.duration, 1);
          const easedProgress = easingFunctions[animationConfig.easing](progress);
          const currentPercent = Math.floor(easedProgress * targetPercent);

          circle.style.background = `conic-gradient(
            #fb9d29 0% ${currentPercent}%, 
            #ffe4c2 ${currentPercent}% 100%
          )`;

          if (progress < 1) {
            requestAnimationFrame(animateProgress);
          } else {
            circle.style.background = `conic-gradient(
              #fb9d29 0% ${targetPercent}%, 
              #ffe4c2 ${targetPercent}% 100%
            )`;
          }
        };

        requestAnimationFrame(animateProgress);
        observer.unobserve(circle);
      }
    });
  }, observerOptions);

  document.querySelectorAll('.progress-circle').forEach(circle => {
    circle.style.background = `conic-gradient(#ffe4c2 0% 100%)`;
    observer.observe(circle);
  });
});
// ===================== Progress Circle Animation End ==========================


// ===================== Testimonial Slider Start ==========================
document.addEventListener('DOMContentLoaded', function() {
  const sliderWrapper = document.getElementById('sliderWrapper');
  const prevButton = document.getElementById('prevButton');
  const nextButton = document.getElementById('nextButton');
  const cards = document.querySelectorAll('.testimonial-card');

  let currentPosition = 0;
  let cardsToShow = 3;
  let cardWidth = 0;
  let autoSlideInterval;

  updateCardsToShow();
  updateSlider();
  startAutoSlide();

  function updateCardsToShow() {
    if (window.innerWidth >= 992) {
      cardsToShow = 3;
    } else if (window.innerWidth >= 768) {
      cardsToShow = 2;
    } else {
      cardsToShow = 1;
    }

    if (cards.length > 0) {
      const cardStyle = getComputedStyle(cards[0]);
      const marginLeft = parseInt(cardStyle.marginLeft) || 0;
      const marginRight = parseInt(cardStyle.marginRight) || 0;
      cardWidth = cards[0].offsetWidth + marginLeft + marginRight;
    }

    const maxPosition = Math.max(0, cards.length - cardsToShow);
    currentPosition = Math.min(currentPosition, maxPosition);
    currentPosition = Math.max(currentPosition, 0);

    updateSlider();
  }

  function updateSlider() {
    const offset = -currentPosition * cardWidth;
    sliderWrapper.style.transform = `translateX(${offset}px)`;

    const centerIndex = currentPosition + Math.floor(cardsToShow / 2);
    cards.forEach((card, index) => {
      card.classList.toggle('active', index === centerIndex);
    });

    prevButton.disabled = currentPosition === 0;
    nextButton.disabled = currentPosition >= cards.length - cardsToShow;
  }

  function nextSlide() {
    if (currentPosition < cards.length - cardsToShow) {
      currentPosition++;
    } else {
      currentPosition = 0;
    }
    updateSlider();
  }

  function prevSlide() {
    if (currentPosition > 0) {
      currentPosition--;
    } else {
      currentPosition = cards.length - cardsToShow;
    }
    updateSlider();
  }

  function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
      nextSlide();
    }, 3000);
  }

  function stopAutoSlide() {
    clearInterval(autoSlideInterval);
  }

  nextButton.addEventListener('click', () => {
    nextSlide();
    stopAutoSlide();
    startAutoSlide();
  });

  prevButton.addEventListener('click', () => {
    prevSlide();
    stopAutoSlide();
    startAutoSlide();
  });

  sliderWrapper.addEventListener('mouseenter', stopAutoSlide);
  sliderWrapper.addEventListener('mouseleave', startAutoSlide);

  window.addEventListener('resize', function() {
    updateCardsToShow();
  });
});
// ===================== Testimonial Slider End ==========================


// ===================== Back To Top Button Start ==========================
document.addEventListener('DOMContentLoaded', function() {
  const backToTopButton = document.querySelector('.back-to-top');

  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
      backToTopButton.style.display = 'flex';
    } else {
      backToTopButton.style.display = 'none';
    }
  });

  backToTopButton.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
});
// ===================== Back To Top Button End ==========================


// ===================== Contact Us Page Start ==========================
// Optional: Add loading state on click
document.querySelector('.submit-btn').addEventListener('click', function() {
  this.classList.add('loading');
  setTimeout(() => this.classList.remove('loading'), 2000);
});
// ===================== Contact Us Page End ==========================


// ===================== Email Popup Functionality Start ==========================
function openCustomPopup() {
  const popup = document.getElementById("customPopupOverlay");
  popup.classList.add("active");
}

function closeCustomPopup() {
  const popup = document.getElementById("customPopupOverlay");
  popup.classList.remove("active");
}

document.getElementById("customEarlyAccessForm").addEventListener("submit", function(e) {
  e.preventDefault();
  const btn = document.getElementById("signupButton");
  btn.classList.add("loading");
  btn.querySelector(".button-text").style.transform = "translateX(-8px)";
  btn.querySelector(".spinner").style.display = "inline-flex";

  setTimeout(() => {
    btn.classList.remove("loading");
    btn.querySelector(".button-text").style.transform = "translateX(0)";
    btn.querySelector(".spinner").style.display = "none";
    closeCustomPopup();
    alert("Thank you for joining the waitlist!");
  }, 2000);
});
// ===================== Email Popup Functionality End ==========================


// ===================== Read More Popup Start ==========================
const readMoreBtn = document.getElementById('readMoreBtn');
const popupOverlay = document.getElementById('popupOverlay');
const closePopupBtn = document.querySelector('.close-popup');
const signupForm = document.getElementById('signupForm');
const submitBtn = document.getElementById('submitBtn');
const spinner = document.querySelector('.spinner');

readMoreBtn.addEventListener('click', function() {
  popupOverlay.style.display = 'flex';
  document.body.style.overflow = 'hidden';
});

function closePopup() {
  popupOverlay.style.display = 'none';
  document.body.style.overflow = 'auto';
}

closePopupBtn.addEventListener('click', closePopup);

popupOverlay.addEventListener('click', function(e) {
  if (e.target === this) {
    closePopup();
  }
});

signupForm.addEventListener('submit', function(e) {
  e.preventDefault();

  const errorMessages = document.querySelectorAll('.error-message');
  errorMessages.forEach(msg => msg.style.display = 'none');

  const inputs = document.querySelectorAll('.form-input');
  inputs.forEach(input => input.classList.remove('error'));

  let isValid = true;

  const firstName = document.getElementById('firstName');
  if (!firstName.value.trim()) {
    showError(firstName, 'First name is required');
    isValid = false;
  }

  const lastName = document.getElementById('lastName');
  if (!lastName.value.trim()) {
    showError(lastName, 'Last name is required');
    isValid = false;
  }

  const email = document.getElementById('email');
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!email.value.trim()) {
    showError(email, 'Email is required');
    isValid = false;
  } else if (!emailRegex.test(email.value)) {
    showError(email, 'Please enter a valid email');
    isValid = false;
  }

  const password = document.getElementById('password');
  if (!password.value) {
    showError(password, 'Password is required');
    isValid = false;
  } else if (password.value.length < 8) {
    showError(password, 'Password must be at least 8 characters');
    isValid = false;
  }

  const confirmPassword = document.getElementById('confirmPassword');
  if (!confirmPassword.value) {
    showError(confirmPassword, 'Please confirm your password');
    isValid = false;
  } else if (password.value !== confirmPassword.value) {
    showError(confirmPassword, 'Passwords do not match');
    isValid = false;
  }

  if (!isValid) return;

  submitBtn.disabled = true;
  spinner.style.display = 'inline-block';

  setTimeout(() => {
    spinner.style.display = 'none';
    submitBtn.disabled = false;
    alert('Thank you for joining our waitlist!');
    signupForm.reset();
    closePopup();
  }, 2000);
});

function showError(inputElement, message) {
  const errorElement = inputElement.nextElementSibling;
  inputElement.classList.add('error');
  errorElement.textContent = message;
  errorElement.style.display = 'block';
}
// ===================== Read More Popup End ==========================


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