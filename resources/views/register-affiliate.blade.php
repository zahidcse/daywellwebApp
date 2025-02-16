
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Daywell</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('signup.css') }}">
</head>
<body>

<div class="background-container">
    <div class="form-container">
        <h1 class="form-title">Daywell</h1>
        <p class="form-subtitle">Daywell's Affiliate Program</p>
        <p class="text-center form-description">
            Join Daywell's Affiliate Program and receive a 10% commission on all payments for paying customers you refer to <a href="#">daywell.co</a>!
        </p>
        <hr>
        @if ($errors->any())
            <div style="color: red">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('registerAffiliate') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" name="first_name"  value="{{ old('first_name') }}" class="form-control" id="firstname" placeholder="First name" required>
            </div>
            <div class="mb-3">
                <label for="lastname"  class="form-label">Last name</label>
                <input type="text" name="last_name"  value="{{ old('last_name') }}" class="form-control" id="lastname" placeholder="Last name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email"  value="{{ old('email') }}" name="email" class="form-control" id="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password"  value="{{ old('password') }}" class="form-control" id="password" placeholder="Password" required>
                <small class="form-text">Minimum 8 characters, ideally more.</small>
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm password</label>
                <input type="password" name="password_confirmation" class="form-control" id="confirm-password" placeholder="Confirm password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">
                Sign Up
            </button>
        </form>
        <p class="text-center mt-3">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </p>
        <p class="text-center form-footer mt-4">
            Daywell's Affiliate Program is powered by .....
        </p>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
