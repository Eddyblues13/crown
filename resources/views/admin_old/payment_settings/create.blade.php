@include('admin.header')

    <!-- Main Content -->
    <div class="container py-5">
      <h6 class="mb-4 fs-5"><small><a href="home.html" class="text-decoration-none">Control Panel</a> > <a href="wallet.html" class="text-decoration-none">Wallets</a> > Update</small></h6>

      <div class="menu-items bg-white px-5 py-4 forget-pass">

        <form method="POST" action="{{ route('payment.store') }}" enctype="multipart/form-data">
          @csrf

          <div class="mb-3">
            <label for="address" class="form-label">Wallet Address</label>
            <input type="text" class="form-control" id="address" name="wallet_address" value="{{ old('wallet_address', $payment->wallet_address ?? '') }}">
          </div>

          <div class="mb-3">
            <label for="walletType" class="form-label">Select Wallet Type</label>
            <select  name="wallet_type" class="form-select" id="walletType">
              <option value="bitcoin">Bitcoin Wallet</option>
              <option value="ethereum">Ethereum Wallet</option>
              <option value="dogecoin">Dogecoin Wallet</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="network" class="form-label">Network</label>
            <input type="text" class="form-control" name="wallet_network" id="network" value="">
          </div>
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    
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
