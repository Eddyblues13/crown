@include('admin.header')

<div class="main-panel">

    <div class="content bg-dark">
        <div class="page-inner">
            @if(session('message'))
            <div class="alert alert-success mb-2">{{session('message')}}</div>
            @endif
            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">Add Trader</h1>
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
                        <form action="{{ route('traders.store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Trader Name</h5>
                                    <input class="form-control text-light bg-dark" placeholder="Enter trader name"
                                        type="text" name="trader_name" value="{{ old('trader_name') }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Trading Minimum Amount ($)</h5>
                                    <input class="form-control text-light bg-dark" placeholder="Enter minimum price"
                                        type="text" name="trading_min_amount" value="{{ old('trading_min_amount') }}"
                                        required>
                                    <small class="text-light">This is the minimum amount a user can pay to copy this
                                        trader.</small>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Trading Maximum Amount ($)</h5>
                                    <input class="form-control text-light bg-dark" placeholder="Enter maximum price"
                                        type="text" name="trading_max_amount" value="{{ old('trading_max_amount') }}"
                                        required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Top up Interval</h5>
                                    <select class="form-control text-light bg-dark" name="top_up_interval">
                                        <option value="Monthly" {{ old('top_up_interval')=='Monthly' ? 'selected' : ''
                                            }}>Monthly</option>
                                        <option value="Weekly" {{ old('top_up_interval')=='Weekly' ? 'selected' : '' }}>
                                            Weekly</option>
                                        <option value="Daily" {{ old('top_up_interval')=='Daily' ? 'selected' : '' }}>
                                            Daily</option>
                                        <option value="Hourly" {{ old('top_up_interval')=='Hourly' ? 'selected' : '' }}>
                                            Hourly</option>
                                        <option value="Every 30 Minutes" {{ old('top_up_interval')=='Every 30 Minutes'
                                            ? 'selected' : '' }}>Every 30 Minutes</option>
                                    </select>
                                    <small class="text-light">This specifies how often the system should add profit
                                        (ROI) to the user account.</small>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Top up Type</h5>
                                    <select class="form-control text-light bg-dark" name="top_up_type">
                                        <option value="Percentage" {{ old('top_up_type')=='Percentage' ? 'selected' : ''
                                            }}>Percentage</option>
                                        <option value="Fixed" {{ old('top_up_type')=='Fixed' ? 'selected' : '' }}>Fixed
                                        </option>
                                    </select>
                                    <small class="text-light">This specifies if the system should add profit in
                                        percentage (%) or a fixed amount.</small>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Top up Amount (in % or $ as specified above)</h5>
                                    <input class="form-control text-light bg-dark" placeholder="Top up amount"
                                        type="text" name="top_up_amount" value="{{ old('top_up_amount') }}" required>
                                    <small class="text-light">This is the amount the system will add to users' accounts
                                        as profit.</small>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Investment Duration</h5>
                                    <select class="form-control text-light bg-dark" name="investment_duration" required>
                                        <option value="" disabled {{ old('investment_duration')=='' ? 'selected' : ''
                                            }}>Choose</option>
                                        <option value="2 Weeks" {{ old('investment_duration')=='2 Weeks' ? 'selected'
                                            : '' }}>2 Weeks</option>
                                        <option value="1 Day" {{ old('investment_duration')=='1 Day' ? 'selected' : ''
                                            }}>1 Day</option>
                                        <option value="1 Week" {{ old('investment_duration')=='1 Week' ? 'selected' : ''
                                            }}>1 Week</option>
                                        <option value="1 Month" {{ old('investment_duration')=='1 Month' ? 'selected'
                                            : '' }}>1 Month</option>
                                        <option value="2 Months" {{ old('investment_duration')=='2 Months' ? 'selected'
                                            : '' }}>2 Months</option>
                                        <option value="1 Year" {{ old('investment_duration')=='1 Year' ? 'selected' : ''
                                            }}>1 Year</option>
                                        <option value="3 Months" {{ old('investment_duration')=='3 Months' ? 'selected'
                                            : '' }}>3 Months</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Trader Years of Experience</h5>
                                    <input class="form-control text-light bg-dark"
                                        placeholder="Enter years of experience" type="text"
                                        name="trader_year_of_experience" value="{{ old('trader_year_of_experience') }}"
                                        required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Copier ROI</h5>
                                    <input class="form-control text-light bg-dark" placeholder="Enter ROI" type="text"
                                        name="copier_roi" value="{{ old('copier_roi') }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Risk Index</h5>
                                    <input class="form-control text-light bg-dark" placeholder="Enter risk index"
                                        type="text" name="risk_index" value="{{ old('risk_index') }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Performance</h5>
                                    <input class="form-control text-light bg-dark" placeholder="Enter performance"
                                        type="text" name="performance" value="{{ old('performance') }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Total Copied Trades</h5>
                                    <input class="form-control text-light bg-dark"
                                        placeholder="Enter total copied trades" type="text" name="total_copied_trade"
                                        value="{{ old('total_copied_trade') }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Active Traders</h5>
                                    <input class="form-control text-light bg-dark" placeholder="Enter active traders"
                                        type="text" name="active_traders" value="{{ old('active_traders') }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Trader Country</h5>
                                    <input class="form-control text-light bg-dark" placeholder="Enter trader country"
                                        type="text" name="trader_country" value="{{ old('trader_country') }}" required>
                                </div>

                                <!-- Followers Field -->
                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Followers</h5>
                                    <input class="form-control text-light bg-dark"
                                        placeholder="Enter number of followers" type="text" name="followers"
                                        value="{{ old('followers') }}" required>
                                </div>

                                <!-- Verified Status Field -->
                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Verified Status</h5>
                                    <select class="form-control text-light bg-dark" name="verified_status">
                                        <option value="1" {{ old('verified_status')=='1' ? 'selected' : '' }}>Verified
                                        </option>
                                        <option value="0" {{ old('verified_status')=='0' ? 'selected' : '' }}>Not
                                            Verified</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <h5 class="text-light">About Trader</h5>
                                    <textarea class="form-control text-light bg-dark"
                                        placeholder="Enter details about the trader" name="about_trader" rows="4"
                                        required>{{ old('about_trader') }}</textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <h5 class="text-light">Picture</h5>
                                    <input class="form-control text-light bg-dark" type="file" name="picture" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="submit" class="btn btn-primary" value="Add Trader">
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