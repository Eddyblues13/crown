@include('admin.header')

<!-- Main Content -->
<div class="container py-4">
    <h6 class="mb-4 fs-5">
        <small>
            <a href="#" class="text-decoration-none">Control Panel</a> >
            <a href="users.html" class="text-decoration-none">Users</a> >
            <a href="userProfile.html" class="text-decoration-none"></a> > Deposits
        </small>
    </h6>
    <div class="mb-3">
        Trading Balance:
    </div>

    <div class="card p-4 shadow-sm">
        <form method="POST" action="{{ route('update.deposit', $deposit->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status">
                        <option value="Confirmed" {{ $deposit->status == 'Confirmed' ? 'selected' : '' }}>Confirmed
                        </option>
                        <option value="Pending" {{ $deposit->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="month" class="form-label">Month</label>
                    <select class="form-select" id="month" name="month">
                        <option value="FEB" selected>FEB</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="day" class="form-label">Day</label>
                    <select class="form-select" id="day" name="day">
                        <option value="24" selected>24</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
        <p class="text-center mt-3 fw-bold">NO PAYMENT PROOF</p>
    </div>

    <div class="card p-3">
        <h5 class="mb-3">Investment Term</h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="fw-bold">Comment</td>
                        <td>Trading</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Updated at Day</td>
                        <td>24</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Updated at Month</td>
                        <td>FEB</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Created by Admin</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Proof</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Created At</td>
                        <td>2025-02-24T22:24:12.000000Z</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Updated At</td>
                        <td>2025-02-24T22:55:37.000000Z</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sidebar = document.getElementById('sidebar');
        sidebar.addEventListener('shown.bs.offcanvas', () => {
            document.querySelectorAll('.dropdown-content').forEach(content => {
                content.classList.add('active');
                const arrow = content.previousElementSibling.querySelector('.arrow');
                if (arrow) {
                    arrow.classList.add('up');
                }
            });
        });
        sidebar.addEventListener('hidden.bs.offcanvas', () => {
            document.querySelectorAll('.dropdown-content').forEach(content => {
                content.classList.remove('active');
                const arrow = content.previousElementSibling.querySelector('.arrow');
                if (arrow) {
                    arrow.classList.remove('up');
                }
            });
        });
    });
</script>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>