@include('admin.header')

<!-- Main Content -->
<div class="container py-4">
    <h6 class="mb-4 fs-5">
        <small>
            <a href="#" class="text-decoration-none">Control Panel</a> >
            <a href="users.html" class="text-decoration-none">Users</a> >
            <a href="userProfile.html" class="text-decoration-none">{{$user_name}}</a> > Deposits
        </small>
    </h6>
    <div class="mb-3">
        Trading Balance: ${{$balance_sum}}
    </div>

    <!-- Deposit Form -->
    <div class="card p-4 mb-4">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <h5 class="mb-3">Add User Deposit</h5>
        <form action="{{ route('add.deposit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">

            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" required>
            </div>

            {{-- <div class="mb-3">
                <label for="deposit_type" class="form-label">Deposit Type</label>
                <select class="form-control" id="deposit_type" name="deposit_type" required>
                    <option value="">Select Type</option>
                    <option value="crypto">Crypto</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="payment_mode" class="form-label">Payment Mode</label>
                <select class="form-control" id="payment_mode" name="payment_mode" required>
                    <option value="">Select Mode</option>
                    <option value="bitcoin">Bitcoin</option>
                    <option value="ethereum">Ethereum</option>
                    <option value="usdt">USDT</option>
                    <option value="bank">Bank</option>
                </select>
            </div>



            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
            </div> --}}

            <button type="submit" class="btn btn-primary">Submit Deposit</button>
        </form>
    </div>
</div>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>