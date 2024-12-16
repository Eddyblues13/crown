@include('admin.header')
<div class="main-panel">
    <div class="content bg-dark">
        <div class="page-inner">
            @if(session('message'))
            <div class="alert alert-success mb-2">{{ session('message') }}</div>
            @endif
            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">Open Trade</h1>
            </div>
            <div>
                <div class="mb-5 row">
                    <div class="col-lg-12">
                        <div class="p-3 card bg-dark">
                            <form action="{{ route('admin.trades.store') }}" method="POST">
                                @csrf
                                <!-- Hidden user_id -->
                                <input type="hidden" name="user_id" value="{{ $user->id }}">

                                <!-- Rest of the form -->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <h5 class="text-light">Asset</h5>
                                        <select name="asset" class="form-control text-light bg-dark" required>
                                            <option value="lyxe">lyxe</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <h5 class="text-light">Category</h5>
                                        <select name="category" id="category" class="form-control text-light bg-dark"
                                            required>
                                            <option value="stocks">Stocks</option>
                                            <option value="crypto">Crypto</option>
                                            <option value="currencies">Currencies</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <h5 class="text-light">Company</h5>
                                        <select name="company" id="company" class="form-control text-light bg-dark"
                                            required></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="text-light">Amount</h5>
                                    <input type="number" class="form-control text-light bg-dark" name="amount"
                                        value="1000" required>
                                </div>
                                <div class="form-group">
                                    <h5 class="text-light">Take Profit (Optional)</h5>
                                    <input type="number" class="form-control text-light bg-dark" name="take_profit"
                                        value="7">
                                </div>
                                <div class="form-group">
                                    <h5 class="text-light">Stop Loss (Optional)</h5>
                                    <input type="number" class="form-control text-light bg-dark" name="stop_loss"
                                        value="9">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success px-4">BUY</button>
                                    <button type="submit" class="btn btn-danger px-4">SELL</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="mb-5 row">
                    <div class="col card p-3 shadow bg-dark">
                        <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                            <span style="margin:3px;">
                                <table id="ShipTable" class="table table-hover text-light">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Client Name</th>
                                            <th>Asset</th>
                                            <th>Category</th>
                                            <th>Company</th>
                                            <th>Amount</th>
                                            <th>Take Profit</th>
                                            <th>Stop Loss</th>
                                            <th>Date Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($trades as $trade)
                                        <tr>
                                            <th scope="row">{{ $trade->id }}</th>
                                            <td>{{ $trade->user->name }}</td>
                                            <td>{{ $trade->asset }}</td>
                                            <td>{{ $trade->category }}</td>
                                            <td>{{ $trade->company }}</td>
                                            <td>${{ number_format($trade->amount, 2, '.', ',') }}</td>
                                            <td>{{ $trade->take_profit ?? 'N/A' }}</td>
                                            <td>{{ $trade->stop_loss ?? 'N/A' }}</td>
                                            <td>{{ \Carbon\Carbon::parse($trade->created_at)->format('D, M j, Y g:i A')
                                                }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        // Define the data for each category
        const companies = {
            stocks: [
        'Amazon', 'Apple', 'Tesla', 'Microsoft', 'Google', 'Facebook', 'NVIDIA', 'Intel', 
        'Alibaba', 'Samsung', 'Sony', 'Toyota', 'Visa', 'Mastercard', 'JPMorgan Chase', 
        'Berkshire Hathaway', 'Walmart', 'Procter & Gamble', 'Coca-Cola', 'PepsiCo', 
        'Johnson & Johnson', 'Chevron', 'ExxonMobil', 'Pfizer', 'Meta Platforms', 'Disney', 
        'Netflix', 'Starbucks', 'Square', 'AMD', 'Nike', 'Zoom', 'PayPal', 'Salesforce', 
        'Shopify', 'Adidas', 'Boeing', 'Cisco', 'Oracle', 'IBM', 'Dell', 'Uber', 'Lyft'
    ],
    crypto: [
        'Bitcoin', 'Ethereum', 'Ripple', 'Litecoin', 'Cardano', 'Polkadot', 'Dogecoin', 
        'Binance Coin', 'Tether', 'Solana', 'Avalanche', 'Tron', 'Stellar', 'Monero', 
        'Dash', 'Shiba Inu', 'Chainlink', 'Uniswap', 'Algorand', 'Cosmos', 'VeChain', 
        'Aave', 'EOS', 'Zcash', 'Tezos', 'SushiSwap', 'PancakeSwap', 'Filecoin', 
        'Decentraland', 'Axie Infinity', 'Sandbox', 'Theta', 'Polygon', 'Chiliz', 
        'Flow', 'Gala', 'Quant', 'Maker', 'Elrond', 'Hedera', 'Celo', 'Near Protocol'
    ],
    currencies: [
        'AUD/CAD', 'AUD/USD', 'EUR/USD', 'GBP/USD', 'USD/JPY', 'USD/CHF', 'NZD/USD', 
        'EUR/GBP', 'EUR/JPY', 'GBP/JPY', 'CAD/JPY', 'AUD/NZD', 'USD/CNY', 'USD/INR', 
        'USD/SGD', 'EUR/AUD', 'GBP/AUD', 'USD/MXN', 'USD/BRL', 'EUR/CHF', 'USD/HKD', 
        'EUR/CAD', 'GBP/CAD', 'AUD/JPY', 'CHF/JPY', 'NZD/JPY', 'EUR/NZD', 'USD/ZAR', 
        'EUR/SEK', 'USD/NOK', 'GBP/NZD', 'EUR/DKK', 'USD/PLN', 'USD/RUB', 'EUR/PLN', 
        'USD/TRY', 'USD/THB', 'GBP/SEK', 'EUR/NOK', 'GBP/DKK', 'USD/ILS', 'EUR/HUF', 
        'GBP/ZAR', 'EUR/TRY', 'USD/KRW', 'USD/TWD'
    ]
        };

        // Populate companies based on selected category
        document.getElementById('category').addEventListener('change', function () {
            const category = this.value;
            const companySelect = document.getElementById('company');

            // Clear current options
            companySelect.innerHTML = '';

            // Add new options
            if (companies[category]) {
                companies[category].forEach(company => {
                    const option = document.createElement('option');
                    option.value = company.toLowerCase().replace(/\s+/g, '_'); // Format value as lowercase and replace spaces with underscores
                    option.textContent = company;
                    companySelect.appendChild(option);
                });
            }
        });

        // Trigger the event on page load to set the initial values
        document.getElementById('category').dispatchEvent(new Event('change'));
    </script>
    @include('admin.footer')