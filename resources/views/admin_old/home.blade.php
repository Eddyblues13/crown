@include('admin.header')
    <!-- Main Content -->
    <div class="container py-4">
        <h6 class="mb-2"><small>Control Panel</small></h6>
        <div class="menu-items">
            <div class="card mb-2 py-3">
                <a href="{{route('manage.users.page')}}" class="nav-link d-flex align-items-center gap-2">
                    <i class="bi bi-people text-dark"></i>
                    <span>USERS</span>
                </a>
            </div>
            <div class="card mb-2 py-3">
                <a href="{{route('admin.view-trading-plans')}}" class="nav-link d-flex align-items-center gap-2">
                    <i class="bi bi-currency-dollar text-dark fs-5"></i>
                    <span class="">PLANS</span>
                </a>
            </div>
            <div class="card mb-2 py-3">
                <a href="{{ route('traders.index') }}" class="nav-link d-flex align-items-center gap-2">
                    <i class="bi bi-people-fill text-dark fs-5"></i>
                    <span class="">TRADERS</span>
                </a>
            </div>
            <div class="card mb-2 py-3">
                <a href="{{ route('payment.index') }}" class="nav-link d-flex align-items-center gap-2">
                    <i class="bi bi-wallet2 text-dark fs-5"></i>
                    <span class="">WALLETS</span>
                </a>
            </div>
            <div class="card mb-2 py-3">
                <a href="{{route('manage.action.page')}}" class="nav-link d-flex align-items-center gap-2">
                    <i class="bi bi-bell text-dark fs-5"></i>
                    <span class="">ACTIONS</span>
                </a>
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
