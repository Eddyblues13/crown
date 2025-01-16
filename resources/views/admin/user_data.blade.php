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
            border-radius: 1rem;
            transition: background-color 0.3s;
            border-style: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

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
        a{
          text-decoration: none;
        }
        td{
            text-transform: uppercase;
            border: none;
            padding: 20px 10px !important;
        }


    @media (max-width: 767px) {
      .table, .table thead, .table tbody, .table th, .table td, .table tr {
        display: block;
        text-align: center;
      }
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
      <h6 class="mb-4 fs-5"><small><a href="#" class="text-decoration-none">Control Panel</a> > <a href="users.html">Users</a> >{{$user->name}}</small></h6>

        <div class="menu-items">
          <div class="card mb-3 d-flex justify-content-between">
            <div class="row px-3">
              <div class="col-md-4 mx-auto">
                <div class="text-center">
                  <img src="img/camera.png" class="rounded-circle mt-4" width="143" height="143"></img>
                  <div class="pb-3 pt-2"><a href="bots.html">Bots</a></div>
                  <div class="py-3"><a href="">Profile</a></div>
                  <div class="py-3"><a href="">Trades</a></div> 
                  <div class="py-3"><a href="">Deposits</a></div> 
                  <div class="py-3"><a href="">Contracts</a></div> 
                  <div class="py-3"><a href="">Withdrawals</a></div> 
                  <div class="py-3"><a href="">Send Push</a></div> 
                  <div class="py-3"><a href="">Send Email</a></div> 
                </div>
              </div>
              <div class="col-md-8">
                <table class="table table-striped mt-4">
                    <tbody>
                      <tr>
                        <td>trading balance</td>
                        <td>${{number_format($balance_sum, 2, '.', ',')}}</td>
                      </tr>
                      <tr>
                        <td>signal strength</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>trading balance</td>
                        <td>${{number_format($balance_sum, 2, '.', ',')}}</td>
                      </tr>
                      <tr>
                        <td>message</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>message type</td>
                        <td>Normal</td>
                      </tr>
                      <tr>
                        <td>account status</td>
                        <td>Active</td>
                      </tr>
                      <tr>
                        <td>mining balance bnb</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td>balance bnb</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td>mining balance bitcoin</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td>mining balance ethereum</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td>id</td>
                        <td>{{$user->id}}</td>
                      </tr>
                      <tr>
                        <td>email</td>
                        <td>{{$user->email}}</td>
                      </tr>
                      <tr>
                        <td>password</td>
                        <td>Lele1314521</td>
                      </tr>
                      <tr>
                        <td>pin</td>
                        <td>70010</td>
                      </tr>
                      <tr>
                        <td>id verification</td>
                        <td>Skipped</td>
                      </tr>
                      <tr>
                        <td>email verification</td>
                        <td>Completed</td>
                      </tr>
                      <tr>
                        <td>address verification</td>
                        <td>Pending</td>
                      </tr>
                      <tr>
                        <td>dob</td>
                        <td>{{$user->date_of_birth}}</td>
                      </tr>
                      <tr>
                        <td>city</td>
                        <td>{{$user->id}}</td>
                      </tr>
                      <tr>
                        <td>state</td>
                        <td>{{$user->id}}</td>
                      </tr>
                      <tr>
                        <td>last name</td>
                        <td>{{$user->name}}</td>
                      </tr>
                      <tr>
                        <td>post code</td>
                        <td>463400</td>
                      </tr>
                      <tr>
                        <td>created ip</td>
                        <td>163.5.148.127</td>
                      </tr>
                      <tr>
                        <td>created ip</td>
                        <td>163.5.148.127</td>
                      </tr>
                      <tr>
                        <td>first name</td>
                        <td>{{$user->name}}</td>
                      </tr>
                      <tr>
                        <td>mobile number</td>
                        <td>{{$user->phone}}</td>
                      </tr>
                      <tr>
                        <td>street address</td>
                        <td>{{$user->third_adress}}</td>
                      </tr>
                      <tr>
                        <td>photo back view</td>
                        <td>photo front view</td>
                      </tr>
                      <tr>
                        <td>photo profile</td>
                        <td>camera.png</td>
                      </tr>
                      <tr>
                        <td>referral link</td>
                        <td>https://venturescapital.org/signup.html?refid=101</td>
                      </tr>
                      <tr>
                        <td>referral count</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td>deposit sol wallet</td>
                        <td>0hdhdjdkwkdndnadkankndadnadn</td>
                      </tr>
                      <tr>
                        <td>deposit btc wallet</td>
                        <td>hhsjskksksksskdhdmsm</td>
                      </tr>
                      <tr>
                        <td>deposit eth wallet</td>
                        <td>0hdhdhdsksbndikwdbdiwbnd</td>
                      </tr>
                      <tr>
                        <td>deposit ltc wallet</td>
                        <td>ltc1qf8tm0k43xzye296e8dvrse6c6zguk7p6g0wnpn</td>
                      </tr>
                      <tr>
                        <td>deposit doge wallet</td>
                        <td>DSA3t4ZurRyatCDXWAKxp1v9t6ryTp7YXd</td>
                      </tr>
                      <tr>
                        <td>deposit usdt wallet</td>
                        <td>bhjbjjajbdskffksanfsanfasnfansf</td>
                      </tr>
                      <tr>
                        <td>deposit eth wallet network</td>
                        <td>ETH</td>
                      </tr>
                      <tr>
                        <td>deposit usdt wallet network</td>
                        <td>USDT-ERC20</td>
                      </tr>
                      <tr>
                        <td>deposit btc wallet id</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>deposit eth wallet id</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>deposit doge wallet id</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>deposit usdt wallet id</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>deposit sol wallet id</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>deposit ltc wallet id</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>trading profit</td>
                        <td>$0.00</td>
                      </tr>
                      <tr>
                        <td>mining speed ps bnb</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td>mining speed ps bitcoin</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td>mining speed ps ethereum</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td>mining speed ps dogecoin</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td>mining hashrate bnb</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td>mining hashrate bitcoin</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td>mining hashrate ethereum</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td>mining hashrate dogecoin</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td>created at</td>
                        <td>{{$user->created_at}}</td>
                      </tr>
                      <tr>
                        <td>updated at</td>
                        <td>{{$user->updated_at}}</td>
                      </tr>
                    </tbody>
                  </table>

              </div>
            </div> 
          </div>
        </div>
        
    </div>


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
