{{-- @include('admin.header') --}}
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .nav-link {
            color: var(--bs-primary) !important;
            padding: 1rem !important;
        }
        .card {
            border-radius: 0.5rem;
            transition: background-color 0.3s;
            border-style: none;
        }
        .card:hover {
            background-color: #dce2e4;
        }
        .active-card {
            background-color: var(--bs-gray-100);
        }
        body {
            background-color: #f5f7fe;
        }
        .navbar {
            background-color: var(--bs-body-bg) !important;
        }
        @media (max-width: 768px) {
            .desktop-nav {
                display: none;
            }
            .mobile-menu {
                display: block !important;
            }
            .navbar{
                display: none;
            }
        }
        @media (min-width: 769px) {
            /* .mobile-menu {
                display: none;
            } */
             .navbar2{
                display: none !important;
             }
        }

        .sidebar {
            width: 18rem !important;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            background: white;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            z-index: 1000;
            transition: transform 0.3s ease;
            overflow-y: auto;
        }

        .profile-section {
            background-image: url("img/Office.jpg");
            padding: 20px;
            border-bottom: 1px solid #eee;
            margin-bottom: 0;
        }

        .nav-section {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .nav-section .nav-link {
            padding: 10px 20px;
            color: #333 !important;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar .nav-section .nav-link {
            color: #02194a !important;
        }

        .nav-section .nav-link:hover {
            background: #f8f9fa;
        }

        .nav-section-title {
            padding: 10px 20px;
            background: #000;
            color: white;
            font-size: 14px;
        }

        .profile-image img {
            width: 50px;
            height: 50px;
            border-radius: 100%;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }
        }





        .dropdown-btn {
            width: 100%;
            padding: 15px;
            /* background: none; */
            border: none;
            color: white;
            text-align: left;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dropdown-content {
            display: none;
            background-color: #ffffff;
        }

        .dropdown-content.active {
            display: block;
        }

        .dropdown-content a {
            color: white;
            text-decoration: none;
            padding: 12px 15px 12px 35px;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #1a1a1a;
        }

        .arrow {
            border: solid white;
            border-width: 0 2px 2px 0;
            display: inline-block;
            padding: 3px;
            transform: rotate(45deg);
            transition: transform 0.3s;
        }

        .arrow.up {
            transform: rotate(-135deg);
        }

        .search{
          background-color: transparent;
          outline: none;
        }
        .search:focus {
          background-color: transparent;
          outline: none;
          box-shadow: none;
          border-color: #4a4a4a
        }
        .fixed-action-btn {
            position: fixed;
            bottom: 1.5rem;
            right: 1.5rem;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background-color: #0d6efd;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, background-color 0.2s;
            z-index: 1050;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fixed-action-btn:hover {
            transform: scale(1.05);
            background-color: #0b5ed7;
        }

        .fixed-action-btn:active {
            transform: scale(0.95);
        }

        .fixed-action-btn svg {
            width: 24px;
            height: 24px;
            fill: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light border-bottom">
        <div class="container-fluid">
            <button class="btn mobile-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebarMenu">
                <i class="bi bi-list"></i>
            </button>
            <a class="navbar-brand" href="#"><h6>CONTROL PANEL</h6></a>
            <div class="desktop-nav ms-auto d-flex align-items-center gap-4">
                <a href="#" class="text-decoration-none text-body d-flex align-items-center gap-2">
                    <i class="bi bi-people"></i> USERS
                </a>
                <a href="#" class="text-decoration-none text-body d-flex align-items-center gap-2">
                    <i class="bi bi-wallet2"></i> WALLETS
                </a>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="themeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Theme
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="themeDropdown">
                        <li><a class="dropdown-item" href="#" data-theme="light">Light</a></li>
                        <li><a class="dropdown-item" href="#" data-theme="dark">Dark</a></li>
                    </ul>
                </div>
            </div>
            <button class="btn" id="powerBtn">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </nav>

    <!-- Navbar for mobile -->
    <nav class="navbar navbar2 navbar-expand-lg navbar-light border-bottom d-flex">
        <div class="container-fluid">
            <button class="btn mobile-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebarMenu">
                <i class="bi bi-list"></i>
            </button>
            <a class="navbar-brand" href="#"><h6>CONTROL PANEL</h6></a>
            <button class="btn" id="powerBtn">
                <i class="bi bi-power"></i>
            </button>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="sidebar" data-bs-scroll="true" data-bs-backdrop="false">
        <div class="profile-section mb-0 d-flex">
            <div class="d-block align-items-center text-center gap-3">
                <div class="profile-image py-4"><img src="img/human.png" alt=""></div>
                <div>
                    <div class="fw-bold">Ofofonobs Developer</div>
                    <small class="text-muted">admin@mail.com</small>
                </div>
            </div>
            
                <button type="button" class="btn-close mt-4 ms-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!-- Theme Section -->
        <div class="nav-section mt-0 dropdown">
            <div class="nav-section-title dropdown-btn">
                Theme
                <span class="arrow"></span>
            </div>
            <div class="dropdown-content">
                <a href="#" class="nav-link text-dark" id="darkMode">
                    <i class="fas fa-moon"></i> Dark
                </a>
                <a href="#" class="nav-link" id="lightMode">
                    <i class="fas fa-sun"></i> Light
                </a>
            </div>
        </div>

        <!-- Control Section -->
        <div class="nav-section dropdown">
            <div class="nav-section-title dropdown-btn ">
                Control
                <span class="arrow"></span>
            </div>
            <div class="dropdown-content">
                <a href="#" class="nav-link">
                    <i class="fas fa-users"></i> Users
                </a>
                <a href="#" class="nav-link">
                    <i class="fas fa-wallet"></i> Wallets
                </a>
                <a href="#" class="nav-link">
                    <i class="fas fa-chart-line"></i> Traders
                </a>
                <a href="#" class="nav-link">
                    <i class="fas fa-money-bill"></i> Payouts
                </a>
            </div>
        </div>

        <!-- Account Section -->
        <div class="nav-section dropdown">
            <div class="nav-section-title dropdown-btn">
                Account
                <span class="arrow"></span>
            </div>
            <div class="dropdown-content">
                <a href="#" class="nav-link">
                    <i class="fas fa-user"></i> My Account
                </a>
                <a href="#" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i> Sign Out
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container py-4">
      <h6 class="mb-4 fs-5"><small><a href="#" class="text-decoration-none">Control Panel</a> > Wallets</small></h6>

      <form>
        <div class="mb-3">
          <input type="text" class="form-control search" id="search" placeholder="Search">
        </div>
      </form>


      <div class="menu-items">
        @foreach($payments as $payment)
          <div class="card mb-3 active-card d-flex justify-content-between">
              <div class="nav-link d-flex gap-2">
                <div class="info px-3 text-muted">
                  <a href="{{ route('payment.edit', $payment->id) }}" class="text-decoration-none fw-bold text-dark">{{ $payment->wallet_address }}</a>
                  <p class="py-2">{{ $payment->wallet_type }}, ID:{{ $payment->id }} {{ $payment->wallet_network }}</p>
                </div>
              </div>
            </a>
          </div> 
          @endforeach
      </div>
  </div>
     <!-- Fixed Action Button -->
     <button type="button" class="fixed-action-btn" aria-label="Add new item">
        <a href="{{ route('payment.create') }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
            </svg>
        </a>
    </button>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Handle sidebar visibility and dropdowns
    document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');

    // Open all dropdowns when the sidebar is shown
    sidebar.addEventListener('shown.bs.offcanvas', () => {
        document.querySelectorAll('.dropdown-content').forEach(content => {
            content.classList.add('active');
            const arrow = content.previousElementSibling.querySelector('.arrow');
            if (arrow) {
                arrow.classList.add('up');
            }
        });
    });

    // Optional: Close all dropdowns when the sidebar is hidden
    sidebar.addEventListener('hidden.bs.offcanvas', () => {
        document.querySelectorAll('.dropdown-content').forEach(content => {
            content.classList.remove('active');
            const arrow = content.previousElementSibling.querySelector('.arrow');
            if (arrow) {
                arrow.classList.remove('up');
            }
        });
    });

    // Dropdown button functionality
    document.querySelectorAll('.dropdown-btn').forEach(button => {
        button.addEventListener('click', () => {
            const dropdown = button.nextElementSibling;
            const arrow = button.querySelector('.arrow');
            
            // Close all other dropdowns
            document.querySelectorAll('.dropdown-content').forEach(content => {
                if (content !== dropdown && content.classList.contains('active')) {
                    content.classList.remove('active');
                    content.previousElementSibling.querySelector('.arrow').classList.remove('up');
                }
            });

            // Toggle current dropdown
            dropdown.classList.toggle('active');
            arrow.classList.toggle('up');
        });
    });
});

    </script>
</body>
</html>
