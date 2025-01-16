@include('admin.header')
<div class="main-panel bg-dark">
    <div class="content bg-dark">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">Edit Payment Method</h1>
            </div>

            <div class="card p-md-5 p-2 shadow-lg bg-dark">
                <form method="POST" action="{{ route('payment.update', $payment->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="mb-3">
                            <label for="address" class="form-label">Wallet Address</label>
                            <input type="text" class="form-control" id="address" name="wallet_address" value="">
                          </div>
                
                          <div class="mb-3">
                            <label for="walletType" class="form-label">Select Wallet Type</label>
                            <select  name="wallet_type" class="form-select" id="walletType">
                              <option value="bitcoin">Bitcoin Wallet</option>
                              <option value="ethereum">Ethereum Wallet</option>
                              <option value="dogecoin">Dogecoin Wallet</option>
                            </select>
                          </div>
                
                          <div class="mb-3">
                            <label for="network" class="form-label">Network</label>
                            <input type="text" class="form-control" name="wallet_network" id="network" value="">
                          </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary">Update Method</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')