@include('admin.header')

<div class="main-panel">

    <div class="content bg-dark">
        <div class="page-inner">
            @if(session('message'))
            <div class="alert alert-success mb-2">{{session('message')}}</div>
            @endif
            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">Edit Trader</h1>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div class="mb-5 row">
                <div class="col-lg-12 ">
                    <div class="p-3 card bg-dark">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('traders.update', $trader->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Trader Name</h5>
                                    <input class="form-control text-light bg-dark" type="text" name="trader_name"
                                        value="{{ old('trader_name', $trader->trader_name) }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Trading Minimum Amount ($)</h5>
                                    <input class="form-control text-light bg-dark" type="text" name="trading_min_amount"
                                        value="{{ old('trading_min_amount', $trader->trading_min_amount) }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Trading Maximum Amount ($)</h5>
                                    <input class="form-control text-light bg-dark" type="text" name="trading_max_amount"
                                        value="{{ old('trading_max_amount', $trader->trading_max_amount) }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Top Up Interval</h5>
                                    <select class="form-control text-light bg-dark" name="top_up_interval">
                                        <option value="Monthly" {{ old('top_up_interval', $trader->top_up_interval) ==
                                            'Monthly' ? 'selected' : '' }}>Monthly</option>
                                        <option value="Weekly" {{ old('top_up_interval', $trader->top_up_interval) ==
                                            'Weekly' ? 'selected' : '' }}>Weekly</option>
                                        <option value="Daily" {{ old('top_up_interval', $trader->top_up_interval) ==
                                            'Daily' ? 'selected' : '' }}>Daily</option>
                                        <option value="Hourly" {{ old('top_up_interval', $trader->top_up_interval) ==
                                            'Hourly' ? 'selected' : '' }}>Hourly</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Top Up Type</h5>
                                    <select class="form-control text-light bg-dark" name="top_up_type">
                                        <option value="Percentage" {{ old('top_up_type', $trader->top_up_type) ==
                                            'Percentage' ? 'selected' : '' }}>Percentage</option>
                                        <option value="Fixed" {{ old('top_up_type', $trader->top_up_type) == 'Fixed' ?
                                            'selected' : '' }}>Fixed</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Top Up Amount ($)</h5>
                                    <input class="form-control text-light bg-dark" type="text" name="top_up_amount"
                                        value="{{ old('top_up_amount', $trader->top_up_amount) }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Investment Duration</h5>
                                    <input class="form-control text-light bg-dark" type="text"
                                        name="investment_duration"
                                        value="{{ old('investment_duration', $trader->investment_duration) }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Years of Experience</h5>
                                    <input class="form-control text-light bg-dark" type="number"
                                        name="trader_year_of_experience"
                                        value="{{ old('trader_year_of_experience', $trader->trader_year_of_experience) }}"
                                        min="0" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Copier ROI (%)</h5>
                                    <input class="form-control text-light bg-dark" type="number" step="0.01"
                                        name="copier_roi" value="{{ old('copier_roi', $trader->copier_roi) }}" min="0"
                                        required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Risk Index</h5>
                                    <input class="form-control text-light bg-dark" type="number" name="risk_index"
                                        value="{{ old('risk_index', $trader->risk_index) }}" min="0" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Performance</h5>
                                    <input class="form-control text-light bg-dark" type="text" name="performance"
                                        value="{{ old('performance', $trader->performance) }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Total Copied Trades</h5>
                                    <input class="form-control text-light bg-dark" type="number"
                                        name="total_copied_trade"
                                        value="{{ old('total_copied_trade', $trader->total_copied_trade) }}" min="0"
                                        required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Active Traders</h5>
                                    <input class="form-control text-light bg-dark" type="number" name="active_traders"
                                        value="{{ old('active_traders', $trader->active_traders) }}" min="0" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Country</h5>
                                    <input class="form-control text-light bg-dark" type="text" name="trader_country"
                                        value="{{ old('trader_country', $trader->trader_country) }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">About Trader</h5>
                                    <textarea class="form-control text-light bg-dark" name="about_trader" rows="4"
                                        required>{{ old('about_trader', $trader->about_trader) }}</textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Followers</h5>
                                    <input class="form-control text-light bg-dark" type="number" name="followers"
                                        value="{{ old('followers', $trader->followers) }}" min="0" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Verified Status</h5>
                                    <select class="form-control text-light bg-dark" name="verified_status" required>
                                        <option value="1" {{ old('verified_status', $trader->verified_status) == 1 ?
                                            'selected' : '' }}>Verified</option>
                                        <option value="0" {{ old('verified_status', $trader->verified_status) == 0 ?
                                            'selected' : '' }}>Not Verified</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Picture</h5>
                                    @if ($trader->picture)
                                    <img src="{{ asset($trader->picture) }}" alt="Trader Picture"
                                        class="img-thumbnail mb-2" style="max-width: 150px;">
                                    @endif
                                    <input class="form-control text-light bg-dark" type="file" name="picture">
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="submit" class="btn btn-primary" value="Update Trader">
                                </div>
                            </div>
                        </form>






                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="durationModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body bg-dark">
                    <h5 class="text-light">FIRSTLY, Always preceed the time frame with a digit, that is do not write the
                        number in letters, <br> <br> SECONDLY, always add space after the number, <br> <br> LASTLY, the
                        first letter of the timeframe should be in CAPS and always add 's' to the timeframe even if your
                        duration is just a day, month or year.</h5>
                    <h2 class="text-light">Eg, 1 Days, 3 Weeks, 1 Hours, 48 Hours, 4 Months, 1 Years, 9 Months</h2>

                </div>
            </div>
        </div>
    </div>
    <div id="topupModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body bg-dark">

                </div>
            </div>
        </div>
    </div>

    <script>
        function getduration(id, event){
                    event.preventDefault();
                    document.getElementById('duridden').value = id;
                }
    </script>


    @include('admin.footer')