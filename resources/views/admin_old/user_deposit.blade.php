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

    {{-- <div class="menu-items">
        @if($deposits->isEmpty())
        <div class="card mb-3 active-card d-flex justify-content-between text-center py-5">
            <small>No Data Found</small>
        </div>
        @else
        @foreach($deposits as $deposit)
        <a href="{{ route('edit.deposit', $deposit->id) }}" class="text-decoration-none">
            <div class="card mb-3 active-card d-flex justify-content-between align-items-center py-3 px-3">
                <div class="d-flex align-items-center gap-3 w-100">
                    <!-- Date Section (Left) -->
                    <div class="text-center flex-shrink-0">
                        <strong class="d-block">{{ date('M', strtotime($deposit->created_at)) }}</strong>
                        <span class="fs-4">{{ date('d', strtotime($deposit->created_at)) }}</span>
                    </div>

                    <!-- Amount & Status (Middle) -->
                    <div class="d-flex flex-column text-start flex-grow-1">
                        <span class="fw-bold text-primary">
                            ${{ number_format($deposit->amount, 2) }}
                        </span>
                        <div class="text-muted d-flex gap-2">
                            <span>Trading:</span>
                            <span class="{{ $deposit->status == 0 ? 'text-warning' : 'text-success' }}">
                                ( {{ $deposit->status == 0 ? 'Pending' : 'Approved' }} )
                            </span>
                        </div>
                    </div>

                    <!-- Delete Button (Right) -->
                    <div class="flex-shrink-0">
                        <a href="{{ route('delete.deposit', $deposit->id) }}" class="text-danger"
                            onclick="event.preventDefault(); document.getElementById('delete-deposit-form-{{ $deposit->id }}').submit();">
                            <i class="bi bi-trash fs-4"></i>
                        </a>

                        <form id="delete-deposit-form-{{ $deposit->id }}"
                            action="{{ route('delete.deposit', $deposit->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </a>
        @endforeach

        @endif
    </div> --}}
    <div class="menu-items">
        @if($deposits->isEmpty())
        <div class="card mb-3 active-card d-flex justify-content-between text-center py-5">
            <small>No Data Found</small>
        </div>
        @else
        @foreach($deposits as $deposit)
        <div class="card mb-3 active-card d-flex justify-content-between">
            <a href="{{ route('edit.deposit', $deposit->id) }}" class="text-decoration-none">
                <div class="nav-link d-flex justify-content-between align-items-center">
                    <!-- Date Section (Left) -->
                    <div class="text-center flex-shrink-0">
                        <strong class="d-block">{{ date('M', strtotime($deposit->created_at)) }}</strong>
                        <span class="fs-4">{{ date('d', strtotime($deposit->created_at)) }}</span>
                    </div>
                    <!-- Amount & Status (Middle) -->
                    <div class="d-flex flex-column align-items-center justify-content-center text-center flex-grow-1 ms-3"
                        style="margin-left: 200px;">
                        <span class="fw-bold text-primary">
                            ${{ number_format($deposit->amount, 2) }}
                        </span>
                        <div class="text-muted d-flex gap-2">
                            <span>Trading:</span>
                            <span class="{{ $deposit->status == 0 ? 'text-warning' : 'text-success' }}">
                                ( {{ $deposit->status == 0 ? 'Pending' : 'Approved' }} )
                            </span>
                        </div>
                    </div>
                    <!-- Delete Button (Right) -->
                    <div class="delete ms-auto px-2">
                        <a href="#"><i class="fa fa-trash text-danger"></i></a>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @endif
    </div>

    <style>
        .floating-btn {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background-color: #0d6efd;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            z-index: 1000;
            border: none;
        }

        .floating-btn:hover {
            background-color: #0b5ed7;
            transform: scale(1.1);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
    </style>

    <a href="{{ route('add.deposit.page', $user->id) }}" class="floating-btn">
        <i class="fas fa-plus"></i>
    </a>
</div>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>