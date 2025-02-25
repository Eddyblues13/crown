@include('admin.header')


 <!-- Main Content -->
 <div class="container py-5">
    <h6 class="mb-4 fs-5"><small><a href="home.html" class="text-decoration-none">Control</a> <a href="/" class="text-decoration-none">Plans</a> >Create</small></h6>
    <div class="menu-items bg-white px-5 py-4 forget-pass">

      <div class="row">
        @if(session('message'))
        <div class="alert alert-success mb-2">{{ session('message') }}</div>
        @endif
        <div class="col-md-6">
            <form action="{{ route('admin.store-trading-plan') }}" method="POST">
                @csrf
            <div class="mb-3">
              <label for="name" class="form-label text-muted">Title</label>
              <input type="text" class="form-control" id="name" name="name" value="">
            </div>
  
            <div class="mb-3">
              <label for="name" class="form-label text-muted">Price min</label>
              <input type="text" class="form-control" id="price" name="min_amount" value="0.00">
            </div>
  
            <div class="mb-3">
              <label for="name" class="form-label text-muted">Price max</label>
              <input type="text" class="form-control" id="name" name="max_amount" >
            </div>
  
           
  
            <div class="mb-3">
              <label for="type" class="form-label text-muted">Comment</label>
              <textarea class="form-control" name="comment">
              </textarea>
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


				
@include('admin.footer')