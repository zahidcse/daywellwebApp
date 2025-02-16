<h1>{{ $user->first_name .' '. $user->last_name }} Dashboard</h1>
<form method="POST" action="{{ route('logout') }}" x-data>
    @csrf

    <a href="{{ route('logout') }}" class="dropdown-item"
       onclick="event.preventDefault(); this.closest('form').submit();">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
</form>
