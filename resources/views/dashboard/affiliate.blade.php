@extends('dashboard.index')

@section('content')
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
@endsection
