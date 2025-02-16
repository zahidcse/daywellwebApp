<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daywell Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('dashboard/dashboard.css') }}">
</head>
<body>
  <!-- Mobile Menu Toggle -->
  <button class="menu-toggle">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Sidebar Navigation -->
  <nav class="sidebar">
    <div class="logo-container">
      <img src="{{ asset('dashboard/Ahs Edu (23).png') }}" alt="daywell Logo" class="logo">
    </div>

    <div class="nav-menu">
      <a href="#dashboard" class="nav-link active">
        <i class="fas fa-home"></i>
        Dashboard
      </a>

      <div class="user-menu">
        <div class="user-info">
          <i class="fas fa-user-circle"></i>
          {{ $userAffiliate->first_name . ' ' . $userAffiliate->last_name}}
        </div>
        <div class="dropdown-menu">
          <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <a href="{{ route('logout') }}" class="dropdown-item"
               onclick="event.preventDefault(); this.closest('form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </form>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="main-content">
    <!-- Dashboard Section -->
    <section id="dashboard" class="data-section active">
      <div class="dashboard-header">
        <h1>Dashboard</h1>
      </div>

      <table class="data-table">
        <thead>
          <tr>
            <th>Referral Link</th>
            <th>Copy Link</th>
            <th>Leads</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $userAffiliate->referral_link }}</td>
            <td>
              <div class="link-actions">
                <button class="btn btn-primary" onclick="copyLink(this)">
                  <i class="fas fa-copy"></i>
                </button>
              </div>
            </td>
            <td>{{ $leads }}</td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>



  <script src="{{ asset('dashboard/dashboard.js') }}"></script>
</body>
</html>
