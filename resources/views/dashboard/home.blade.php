@include('dashboard.header')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


<style type="text/css">
    /* General Content Styling */
    #content {
        width: 100%;
        transition: all 0.3s;
        margin-top: 60px;
        margin-left: var(--sidebar-width);
    }

    #content.full-width {
        margin-left: 0;
    }

    /* Navigation Links */
    .nav-link {
        color: #8b949e;
        padding: 0.75rem 1rem;
        margin: 0.25rem 0;
        border-radius: 0.5rem;
    }

    .nav-link:hover,
    .nav-link.active {
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
    }





    /* Trading Card Styling */
</style>

<!-- Page Content -->
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Trading Card -->
            <div class="small-card card widget-flat my-4">
                <div class="trading-card p-3">
                    <h2 class="text-center text-white">${{ number_format($balance_sum, 2) }}</h2>
                    <p class="text-center text-white"><small>TRADING BALANCE</small></p>
                    <div class="progress mb-2">
                        <div class="progress-bar" style="width: 25%;"></div>
                    </div>
                    <p class="text-center text-white"><small>SIGNAL STRENGTH</small></p>
                    <div class="row g-2">
                        <div class="col-6">
                            <a href="{{ route('user.deposit') }}" class="btn btn-outline-primary w-100">ADD FUNDS</a>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('user.copy.trader.page') }}" class="btn btn-outline-primary w-100">MY
                                TRADERS (0)</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="small-card card widget-flat my-4">
                <script type="text/javascript"
                    src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-overview.js" async>
                    {
                            "symbols": [
                                [
                                    "Bitcoin",
                                    "COINBASE:BTCUSD|1D"
                                ],
                                [
                                    "Ethereum",
                                    "COINBASE:ETHUSD|1D"
                                ],
                                [
                                    "Tether",
                                    "BINANCE:USDTUSD|1D"
                                ],
                                [
                                    "Ripple",
                                    "BINANCE:XRPUSD|1D"
                                ],
                                [
                                    "Litecoin",
                                    "BINANCE:LTCUSD|1D"
                                ],
                                [
                                    "Cardano",
                                    "BINANCE:ADAUSD|1D"
                                ]
                            ],
                            "chartOnly": false,
                            "width": "100%",
                            "height": 250,
                            "locale": "en",
                            "colorTheme": "dark",
                            "autosize": false,
                            "showVolume": false,
                            "hideDateRanges": false,
                            "hideMarketStatus": false,
                            "hideSymbolLogo": false,
                            "scalePosition": "right",
                            "scaleMode": "Normal",
                            "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                            "fontSize": "10",
                            "noTimeScale": false,
                            "valuesTracking": "1",
                            "changeMode": "price-and-percent",
                            "chartType": "line"
                        }
                </script>
            </div>

        </div>



        <!-- Chart Section -->
        <div class="chart-container">
            <div
                class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3">


            </div>

            <!-- Placeholder for TradingView Chart -->
            <div style="height: 300px; background-color: #1a1d24; border-radius: 0.5rem;"></div>

            <div class="d-flex flex-column flex-sm-row justify-content-between mt-3">
                <div class="status-indicator mb-2 mb-sm-0">
                    <i class="fas fa-hourglass"></i> <!-- Solid -->

                    Open
                </div>
                <div class="status-indicator">
                    <i class="far fa-hourglass"></i> <!-- Outline --> Closed
                </div>
            </div>
        </div>

        <style>
            .trading-card {
                background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url('{{asset("assets/img/candle.jpg")}}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-color: #0d1117;
                border-radius: 10px;
            }

            .card {
                min-height: 100px;
                /* Ensuring all cards have a minimum height */
            }

            .card-body img {
                max-width: 80px;
                /* Consistent image size */
                margin-bottom: 15px;
            }

            .card-body h5,
            .card-body p {
                margin-bottom: 10px;
                /* Consistent spacing */
            }
        </style>


    </div>
    <!-- end row -->

</div>
<!-- container -->

</div>

@include('dashboard.footer')
<script>
    function toggleTradeStatus(status) {
        if (status === 'open') {
            document.getElementById('openTrades').style.display = 'block';
            document.getElementById('closedTrades').style.display = 'none';
        } else if (status === 'closed') {
            document.getElementById('openTrades').style.display = 'none';
            document.getElementById('closedTrades').style.display = 'block';
        }
    }
</script>