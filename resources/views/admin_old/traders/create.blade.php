@include('admin.header')

 <!-- Main Content -->
 <div class="container py-5">
    <h6 class="mb-4 fs-5"><small><a href="home.html" class="text-decoration-none">Control Panel</a> <a href="traders.html" class="text-decoration-none">Traders</a> >Create</small></h6>
    <div class="menu-items bg-white px-5 py-4 forget-pass">

      <div class="row">
        <div class="col-md-6">
            <form action="{{ route('traders.store') }}" method="POST">
                {{ csrf_field() }}
            <div class="mb-3">
              <label for="name" class="form-label text-muted">Name</label>
              <input type="text" class="form-control" id="name" name="trader_name" value="{{ old('trader_name') }}">
            </div>
  
            <div class="mb-3">
              <label for="name" class="form-label text-muted">Price (Bot Only)</label>
              <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" value="0.00">
            </div>
  
            <div class="mb-3">
              <label for="name" class="form-label text-muted">Win Rate</label>
              <input type="text" class="form-control" id="name" name="win_rate"  value="{{ old('win_rate') }}" >
            </div>
  
            <div class="mb-3">
              <label for="profit" class="form-label text-muted">Profit Share</label>
              <input type="text" class="form-control" id="profit" name="profit_share" value="{{ old('profit_share') }}">
            </div>
  
           
  
            <div class="mb-3">
              <label for="type" class="form-label text-muted">Description</label>
              <textarea class="form-control" name="trader_description">{{ old('trader_description') }}
              </textarea>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label text-muted">Type</label>
                <select  name="trader_type" class="form-select">
                    <option value="human">Human</option>
                    <option value="bot">Bot</option>
                </select>
              </div>
  
            
        
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>

       
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

    {{-- @include('admin.footer') --}}