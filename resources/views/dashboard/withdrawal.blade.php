@include('dashboard.header')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Withdrawals</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Withdraw Funds</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4 text-uppercase">
                                <i class="mdi mdi-cash-remove me-1"></i> Withdrawal Request
                            </h5>

                            <!-- Display Errors -->
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <!-- Display Success Message -->
                            @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <form method="POST" action="{{ route('user.withdrawal') }}">
                                @csrf

                                <!-- Withdrawal Type -->
                                <div class="form-group mb-3">
                                    <label for="withdraw_from">Withdraw From</label>
                                    <select id="withdraw_from" name="withdraw_from" class="form-control" required>
                                        <option value="" disabled selected>Select Withdrawal Type</option>
                                        <option value="account_balance">Account Balance (${{ number_format($balance_sum,
                                            2) }})</option>
                                        <option value="deposit">Deposit((${{ number_format($successful_deposits_sum,
                                            2) }}))</option>
                                        <option value="profit">Profit((${{ number_format($profit_sum,
                                            2) }}))</option>
                                    </select>
                                </div>

                                <!-- Withdrawal Method -->
                                <div class="form-group mb-3">
                                    <label for="method">Withdrawal Method</label>
                                    <select id="method" name="method" class="form-control" required>
                                        <option value="" disabled selected>Select Method</option>
                                        <option value="bank_transfer">Bank Transfer</option>
                                        <option value="paypal">PayPal</option>
                                        <option value="crypto">Crypto Wallet</option>
                                    </select>
                                </div>

                                <!-- Amount -->
                                <div class="form-group mb-3">
                                    <label for="amount">Amount</label>
                                    <input type="number" id="amount" name="amount" class="form-control"
                                        placeholder="Enter withdrawal amount" min="1" step="0.01" required>
                                </div>

                                <!-- Additional Details -->
                                <div class="form-group mb-3">
                                    <label for="details">Details</label>
                                    <textarea id="details" name="details" class="form-control" rows="4"
                                        placeholder="Additional information (optional)"></textarea>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">
                                        Submit Withdrawal Request
                                    </button>
                                </div>
                            </form>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->
</div>

@include('dashboard.footer')