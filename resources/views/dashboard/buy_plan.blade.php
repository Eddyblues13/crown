@include('dashboard.header')
<br />
<br />
<br />

<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-lg widget-flat">
                        <div class="card-body">
                            <!-- Button to View Plan History -->
                            <div class="d-flex justify-content-end mb-4">
                                <a href="{{ route('user.show.plan.history') }}" class="btn btn-info text-white">View
                                    Plan
                                    History</a>
                            </div>
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

                            <!-- Trading Plans Section -->
                            <div class="row my-4">
                                <h2 class="text-center fw-bold text-primary mb-4">Available Trading Plans</h2>
                                @foreach($tradingPlans as $plan)
                                <div class="col-md-4">
                                    <div class="card mb-3 shadow border-0">
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-dark fw-bold" style="font-size: 1.25rem;">
                                                {{ $plan->name }}
                                            </h5>
                                            <p class="text-muted mb-2" style="font-size: 0.9rem;">
                                                <strong>Minimum:</strong> ${{ number_format($plan->min_amount, 2) }}
                                            </p>
                                            <p class="text-muted mb-2" style="font-size: 0.9rem;">
                                                <strong>Maximum:</strong> ${{ number_format($plan->max_amount, 2) }}
                                            </p>
                                            <p class="text-muted mb-4" style="font-size: 0.9rem;">
                                                <strong>Duration:</strong> {{ $plan->duration }} months
                                            </p>
                                            <form action="{{ route('user.store.plan.history') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                                <input type="hidden" value="{{ $plan->name }}" name="plan">
                                                <div class="form-group">
                                                    <label for="amount_{{ $plan->id }}"
                                                        class="form-label text-dark fw-bold">Investment Amount:</label>
                                                    <input type="number" name="amount" id="amount_{{ $plan->id }}"
                                                        class="form-control text-dark bg-light mb-3" min="1" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="withdraw_from_{{ $plan->id }}"
                                                        class="form-label text-dark fw-bold">Withdraw From</label>
                                                    <select id="withdraw_from_{{ $plan->id }}" name="withdraw_from"
                                                        class="form-control mb-3" required>
                                                        <option value="" disabled selected>Select Withdrawal Type
                                                        </option>
                                                        <option value="account_balance">Account Balance (${{
                                                            number_format($balance_sum, 2) }})</option>
                                                        <option value="deposit">Deposit (${{
                                                            number_format($successful_deposits_sum, 2) }})</option>
                                                        <option value="profit">Profit (${{ number_format($profit_sum, 2)
                                                            }})</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary w-100">Buy Plan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('dashboard.footer')