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
