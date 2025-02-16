// Navigation Handling
document.querySelectorAll('.nav-link').forEach(link => {
  link.addEventListener('click', function(e) {
    e.preventDefault();
    const target = this.getAttribute('href');
    
    document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
    document.querySelectorAll('.data-section').forEach(s => s.classList.remove('active'));
    
    this.classList.add('active');
    document.querySelector(target).classList.add('active');
    document.querySelector('.sidebar').classList.remove('active');
    document.querySelector('.sidebar-overlay')?.remove();
  });
});

// User Dropdown
document.querySelector('.user-info').addEventListener('click', function(e) {
  e.stopPropagation();
  document.querySelector('.dropdown-menu').classList.toggle('show');
});

// Close dropdown when clicking outside
document.addEventListener('click', () => {
  document.querySelector('.dropdown-menu').classList.remove('show');
});

// Mobile Menu Toggle
document.querySelector('.menu-toggle').addEventListener('click', function() {
  const sidebar = document.querySelector('.sidebar');
  sidebar.classList.toggle('active');
  
  if(sidebar.classList.contains('active')) {
    const overlay = document.createElement('div');
    overlay.className = 'sidebar-overlay';
    overlay.style.cssText = `
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0,0,0,0.3);
      z-index: 999;
    `;
    overlay.addEventListener('click', () => {
      sidebar.classList.remove('active');
      overlay.remove();
    });
    document.body.appendChild(overlay);
  } else {
    document.querySelector('.sidebar-overlay')?.remove();
  }
});

// Copy Link Functionality
function copyLink(button) {
  const link = button.closest('tr').querySelector('td:first-child').textContent;
  navigator.clipboard.writeText(link);
  alert('Link copied to clipboard!');
}

let currentEditingRow = null; // Global variable to track editing row

// Edit Link Functionality
function editLink(button) {
  currentEditingRow = button.closest('tr');
  const linkCell = currentEditingRow.querySelector('td:first-child');
  const currentLink = linkCell.textContent.split('via=')[1];
  
  document.getElementById('createLinkModal').style.display = 'flex';
  document.getElementById('tokenInput').value = currentLink;
  document.querySelector('.create-btn').textContent = "Update Link";
}

// Show modal for creating a new link
document.querySelector('.create-link-container button').addEventListener('click', (e) => {
  e.preventDefault();
  currentEditingRow = null;
  document.getElementById('createLinkModal').style.display = 'flex';
  document.getElementById('tokenInput').value = '';
  document.querySelector('.create-btn').textContent = "Create Link";
});

// Close modal
const closeModal = () => {
  document.getElementById('createLinkModal').style.display = 'none';
  document.getElementById('tokenInput').value = '';
  currentEditingRow = null;
};

document.querySelectorAll('.modal-close, .cancel-btn').forEach(btn => {
  btn.addEventListener('click', closeModal);
});

// Handle create or update link
document.querySelector('.create-btn').addEventListener('click', () => {
  const token = document.getElementById('tokenInput').value;
  const isValid = /^[A-Za-z0-9\-?=]+$/.test(token);

  if (isValid && token.length > 0) {
    const newLink = `https://daywell.co?via=${token}`;

    if (currentEditingRow) {
      const linkCell = currentEditingRow.querySelector('td:first-child');
      linkCell.textContent = newLink;
    } else {
      const newRow = document.createElement('tr');
      newRow.innerHTML = `
        <td>${newLink}</td>
        <td>
          <div class="link-actions">
            <button class="btn btn-primary" onclick="copyLink(this)">
              <i class="fas fa-copy"></i>
            </button>
            <button class="btn btn-secondary" onclick="editLink(this)">
              <i class="fas fa-edit"></i>
            </button>
          </div>
        </td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      `;
      document.querySelector('.data-table tbody').appendChild(newRow);
    }

    closeModal();
  } else {
    alert('Invalid link. Only letters, numbers, dashes, equal signs, and question marks are allowed.');
  }
});

// Close modal when clicking outside
document.getElementById('createLinkModal').addEventListener('click', (e) => {
  if (e.target === document.getElementById('createLinkModal')) {
    closeModal();
  }
});

// Real-time validation
document.getElementById('tokenInput').addEventListener('input', function(e) {
  this.value = this.value.replace(/[^A-Za-z0-9\-?=]/g, '');
});

// Subscription Management Functions
function changePlan(plan) {
  const planNames = {
    basic: 'Basic Plan',
    pro: 'Pro Plan',
    enterprise: 'Enterprise Plan'
  };

  document.querySelectorAll('.plan-card').forEach(card => {
    card.classList.remove('current');
    card.querySelector('button').disabled = false;
    card.querySelector('button').textContent = 
      card.classList.contains('enterprise') ? 'Upgrade' : 'Upgrade Plan';
  });

  document.querySelector(`.plan-card.${plan}`).classList.add('current');
  document.querySelector(`.plan-card.${plan} button`).disabled = true;
  document.querySelector(`.plan-card.${plan} button`).textContent = 'Current Plan';
  
  document.getElementById('currentPlanName').textContent = planNames[plan];
  alert(`Successfully changed to ${planNames[plan]}!`);
}

function showCancellationModal() {
  document.getElementById('cancellationModal').style.display = 'flex';
}

function closeCancellationModal() {
  document.getElementById('cancellationModal').style.display = 'none';
}

function confirmCancellation() {
  document.getElementById('planStatus').textContent = 'Cancelling at end of period';
  document.getElementById('planStatus').classList.remove('active');
  document.getElementById('planStatus').classList.add('expiring');
  closeCancellationModal();
  alert('Subscription will cancel at end of billing period');
}

// Add to existing modal close handler
document.querySelectorAll('.modal-close, .cancel-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    closeModal();
    closeCancellationModal();
  });
});