@extends('layout.master')

@section('container')
    <style>
        @media print {
            /* Hide the master layout's sidebars, navbar, footers, and dashboard wraps */
            body *, 
            .content-wrapper, 
            .container {
                visibility: hidden;
                background: transparent !important;
                box-shadow: none !important;
                margin: 0 !important;
                padding: 0 !important;
            }
            /* Target ONLY the receipt card frame and its elements to be visible */
            .printable-receipt-card, 
            .printable-receipt-card * {
                visibility: visible;
            }
            /* Position the card cleanly at the very top-left of the printed paper page */
            .printable-receipt-card {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                max-width: 100% !important;
                border: none !important; /* Removes dashed borders for print if desired */
            }
        }
    </style>

    <div class="content-wrapper">
        <div class="page-header d-print-none mb-4">
            <h3 class="page-title d-flex align-items-center gap-2">
                <a href="{{ route('admin.studentfee.create') }}" class="btn btn-sm btn-primary">
                    <i class="mdi mdi-home"></i>
                </a>
                <span class="text-white">StudentFee Bill Page</span>
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb mb-0">
                    <li class="breadcrumb-item active" aria-current="page">
                        Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle ms-1"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="container my-4">
            <div class="text-center mb-4 d-print-none">
                <button onclick="window.print()" class="btn btn-primary px-4 shadow-sm">
                    <i class="mdi mdi-printer me-2"></i>Print Receipt
                </button>
            </div>

            <div class="font-monospace text-dark" style="max-width: 500px; margin: 0 auto;">
                <div class="card border border-secondary border-dashed bg-white p-4 shadow-sm rounded-0 printable-receipt-card">

                    <div class="text-center mb-3">
                        <h2 class="fw-bold text-uppercase mb-1 fs-4">IMS</h2>
                        <p class="fw-semibold mb-0 small text-uppercase">Institute Management System</p>
                        <p class="mb-0 small text-muted">Nepalgunj, Banke</p>
                        <p class="mb-0 small text-muted font-monospace" style="font-size: 11px;">
                            PAN No: 601341764 | Phone: 081532883, 9848022391
                        </p>
                    </div>

                    <div class="text-center fw-bold text-uppercase border-bottom border-dark pb-2 mb-3 fs-5 tracking-wide">
                        Receipt
                    </div>

                    <div class="row g-1 small mb-3">
                        <div class="col-6">
                            <strong>Receipt No:</strong> {{ $studentfee->receipt_no }}
                        </div>
                        <div class="col-6 text-end">
                            <strong>Paid Date:</strong> {{ $studentfee->paid_date }}
                        </div>
                        <div class="col-6">
                            <strong>Student ID:</strong> {{ $studentfee->student->id }}
                        </div>
                    </div>

                    <div class="border-top border-bottom border-secondary py-2 my-2 small">
                        <div class="row mb-1">
                            <div class="col-4 fw-bold">Student Name:</div>
                            <div class="col-8 text-uppercase">{{ $studentfee->student->full_name }}</div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-4 fw-bold">Class :</div>
                            <div class="col-8">{{ $studentfee->student->course->course_name }}</div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-4 fw-bold">Course Fee :</div>
                            <div class="col-8">Rs. {{ number_format($studentfee->student->course->fee, 2) }}</div>
                        </div>
                        <div class="row">
                            <div class="col-4 fw-bold">Received From:</div>
                            <div class="col-8 text-uppercase">{{ $studentfee->student->full_name }}</div>
                        </div>
                    </div>

                    <div class="table-responsive my-3">
                        <table class="table table-bordered border-dark table-sm text-end align-middle mb-0 small">
                            <thead class="table-light text-center">
                                <tr>
                                    <th class="fw-bold p-2">Pre. Balance</th>
                                    <th class="fw-bold p-2">Paid Amount</th>
                                    <th class="fw-bold p-2">Remaining</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2">Rs. {{ number_format($studentfee->pre_balance, 2) }}</td>
                                    <td class="fw-bold p-2 bg-light text-dark">Rs. {{ number_format($studentfee->pay_amount, 2) }}</td>
                                    <td class="p-2">Rs. {{ number_format($studentfee->remaining_balance, 2) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="small mb-4 bg-light p-2 border rounded-0">
                        <div class="mb-1">
                            <strong>A sum of:</strong> Rs. {{ number_format($studentfee->pay_amount, 2) }}
                        </div>
                        <div class="fst-italic text-muted">
                            <strong>In Words:</strong>
                            {{ ucwords(Illuminate\Support\Number::spell((float) $studentfee->pay_amount)) }} Rupees Only
                        </div>
                        <div class="mt-2 pt-2 border-top border-light-subtle">
                            <strong>Remarks:</strong> <span class="text-secondary">{{ $studentfee->remarks ?? 'Due Date remaining' }}</span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-end mt-4 pt-2">
                        <div class="text-muted font-monospace" style="font-size: 10px;">
                            * System Generated Receipt
                        </div>
                        <div class="text-center" style="width: 140px;">
                            <p class="mb-0 fw-bold text-dark-50 fst-italic" style="font-family: 'Georgia', serif; font-size: 16px;">
                                {{ $studentfee->received_by }}
                            </p>
                            <div class="border-top border-dark pt-1 small font-monospace text-uppercase" style="font-size: 11px;">
                                Received By
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection