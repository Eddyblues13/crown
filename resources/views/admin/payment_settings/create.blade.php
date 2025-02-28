@include('admin.header')
<div class="main-panel bg-dark">
    <div class="content bg-dark">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">Add New Payment Method</h1>
            </div>

            <div class="card p-md-5 p-2 shadow-lg bg-dark">
                <form method="POST" action="{{ route('payment.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        @include('admin.payment_settings._form')
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary">Save Method</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')