@extends('layout.master')
@section('container')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <a href="{{ route('admin.studentfee.index') }}">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-home"></i>
                    </span> </a> StudentFee Create Page
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="container p-5 bg-white">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.studentFee.student.store', $student->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="receipt_no" class="form-label">Receipt_No</label>
                    <input type="text" class="form-control" name="receipt_no" id="receipt_no">
                </div>

                <div class="mb-3">
                    <label for="paid_date" class="form-label">Paid_Date</label>
                    <input type="date" class="form-control" name="paid_date" id="paid_date">
                </div>

                <div class="mb-3">
                    <label class="form-label">Student Name</label>
                    <input type="text" class="form-control" value="{{ $student->full_name }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="pay_amount" class="form-label">Pay_Amount</label>
                    <input type="number" class="form-control" name="pay_amount" id="pay_amount" min="0" step="any">
                </div>

                <div class="mb-3">
                    {{-- Displays either the last remaining balance or the full course fee dynamically --}}
                    <input type="number" class="form-control" 
                        value="{{ $student->latestRemainingBalance() }}" 
                        name="pre_balance" id="pre_balance" hidden>
                </div>

                <div class="mb-3">
                    <label for="remaining_balance" class="form-label">Remaining_Balance</label>
                    <input type="number" class="form-control" name="remaining_balance" id="remaining_balance"
                        value="{{ $student->latestRemainingBalance() }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="remarks" class="form-label">Remarks</label>
                    <input type="text" class="form-control" name="remarks" id="remarks">
                </div>

                <div class="mb-3">
                    <label for="received_by" class="form-label">Received_By</label>
                    <input type="text" class="form-control" name="received_by" id="received_by">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        {{-- JavaScript Section --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const preBalanceInput = document.getElementById('pre_balance');
                const payAmountInput = document.getElementById('pay_amount');
                const remainingBalanceInput = document.getElementById('remaining_balance');

                function calculateRemaining() {
                    const preBalance = parseFloat(preBalanceInput.value) || 0;
                    const payAmount = parseFloat(payAmountInput.value) || 0;

                    // Deduct the current dynamic previous balance 
                    const remaining = preBalance - payAmount;

                    remainingBalanceInput.value = remaining.toFixed(2);
                }

                payAmountInput.addEventListener('input', calculateRemaining);
            });
        </script>
    @endsection