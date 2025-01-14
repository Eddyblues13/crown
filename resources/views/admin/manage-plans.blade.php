@include('admin.header')


    <!-- Main Content -->
    <div class="container py-4">
      <h6 class="mb-4 fs-5"><small><a href="#" class="text-decoration-none">Control Panel</a> > Plans</small></h6>

      <form>
        <div class="mb-3">
          <input type="text" class="form-control search" id="search" placeholder="Search">
        </div>
      </form>


      <div class="menu-items">
          <div class="card mb-3 active-card d-flex justify-content-between">
            <a href="#" class="text-decoration-none">
              <div class="nav-link d-flex gap-2">
                <div class="info px-3 text-muted">
                  <p class="fw-bold">Trading Bronze Plan</p>
                  <p>1000 - 5000</p>
                </div>
              </div>
            </a>
          </div> 
          
          <div class="card mb-3 active-card d-flex justify-content-between">
            <a href="#" class="text-decoration-none">
              <div class="nav-link d-flex gap-2">
                <div class="info px-3 text-muted">
                  <p class="fw-bold">Trading Bronze Plan</p>
                  <p>1000 - 5000</p>
                </div>
              </div>
            </a>
          </div> 

          <div class="card mb-3 active-card d-flex justify-content-between">
            <a href="#" class="text-decoration-none">
              <div class="nav-link d-flex gap-2">
                <div class="info px-3 text-muted">
                  <p class="fw-bold">Trading Bronze Plan</p>
                  <p>1000 - 5000</p>
                </div>
              </div>
            </a>
          </div> 

          <div class="card mb-3 active-card d-flex justify-content-between">
            <a href="#" class="text-decoration-none">
              <div class="nav-link d-flex gap-2">
                <div class="info px-3 text-muted">
                  <p class="fw-bold">Trading Bronze Plan</p>
                  <p>1000 - 5000</p>
                </div>
              </div>
            </a>
          </div> 

          <div class="card mb-3 active-card d-flex justify-content-between">
            <a href="#" class="text-decoration-none">
              <div class="nav-link d-flex gap-2">
                <div class="info px-3 text-muted">
                  <p class="fw-bold">Trading Bronze Plan</p>
                  <p>1000 - 5000</p>
                </div>
              </div>
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
