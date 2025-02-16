<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>

  <!-- Font Awesome for Social Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
  <!-- Wave-shape CSS -->
  <!-- Internal CSS -->
  <style>
    /* Reset and Base Styles */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff7ef;
      color: #333;
      line-height: 1.6;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    /* Signup Section */
    .signup-section {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 60px 20px 20px 20px;
      position: relative; /* For positioning wave-shape */
      width: 100%;
      overflow: hidden; /* Prevent overflow from wave-shape */
    }

    .signup-container {
      background: #fff;
      border: 1px solid #f5c098;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      width: 100%;
      padding: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
      z-index: 1;
      transition: all 0.3s ease;
    }

    .signup-form {
      width: 100%;
      display: flex;
      flex-direction: column;
    }

    .signup-form h2 {
      font-size: 20px;
      color: #f1912d;
      margin-bottom: 20px;
      text-align: center;
    }

    .signup-form input {
      width: 100%;
      margin: 10px 0;
      padding: 12px 16px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 14px;
      transition: border-color 0.3s ease;
    }

    .signup-form textarea {
      width: 100%;
      margin: 10px 0;
      padding: 12px 16px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 14px;
      transition: border-color 0.3s ease;
    }

    .signup-form input:focus {
      border-color: #f1912d;
      outline: none;
      box-shadow: 0 0 5px rgba(241, 145, 45, 0.5);
    }

    .signup-form button {
      background-color: #f1912d;
      color: white;
      border: none;
      padding: 14px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 6px;
      margin-top: 20px;
      width: 100%;
      transition: background-color 0.3s ease;
    }

    .signup-form button:hover {
      background-color: #e07a1d;
    }

    /* Wave Shape */
    .wave-shape {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: auto;
      z-index: 0; /* Ensure it sits below the signup-container */
    }

    .wave-shape svg {
      display: block;
      width: 100%;
      height: auto;
    }

    /* Footer */
    footer.footer {
      background-color: #f1912d;
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 14px;
      width: 100%;
    }

    .footer-links {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 10px;
    }

    .footer-links p {
      margin: 5px 0;
    }

    .social-icons {
      margin-top: 10px;
    }

    .social-icons a {
      color: white;
      margin: 0 10px;
      font-size: 18px;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #ffe6cc;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .signup-container {
        padding: 30px 20px;
      }

      .signup-form h2 {
        font-size: 22px;
      }

      .signup-form input {
        padding: 10px 14px;
        font-size: 13px;
      }
      .signup-form textarea {
        padding: 10px 14px;
        font-size: 13px;
      }

      .signup-form button {
        padding: 12px;
        font-size: 14px;
      }

      .wave-shape {
        bottom: -20px; /* Adjust wave position */
      }

      footer.footer {
        font-size: 12px;
        padding: 15px;
      }

      .social-icons a {
        margin: 0 8px;
        font-size: 16px;
      }
    }

    @media (max-width: 480px) {
      .signup-container {
        padding: 20px 15px;
      }

      .signup-form h2 {
        font-size: 20px;
      }

      .signup-form input {
        padding: 8px 12px;
        font-size: 12px;
      }
      .signup-form textarea{
        padding: 8px 12px;
        font-size: 12px;
      }

      .signup-form button {
        padding: 10px;
        font-size: 13px;
      }

      .wave-shape {
        bottom: -10px; /* Further adjust wave position */
      }

      footer.footer {
        font-size: 10px;
        padding: 10px;
      }

      .social-icons a {
        margin: 0 6px;
        font-size: 14px;
      }
    }
  </style>
</head>
  <section class="signup-section">
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
  </section>

  <footer class="footer">
    <div class="footer-links">
      <p><a href="{{ route('privacy') }}">Privacy</a> | <a href="{{ route('terms') }}">Terms</a> | <a href="{{ route('contact') }}">Contact</a></p>
      <div class="social-icons">
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
    <p>&copy; 2024, Daywell. All Rights Reserved.</p>
  </footer>
</body>
</html>
