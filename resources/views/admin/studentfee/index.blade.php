@extends('layout.master')
@section('container')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
            
                <span class=" text-white me-2">
                </span> StudentFee Index Page
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Receipt No</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Pay Amount</th>
                        <th scope="col">Remaining Balance</th>
                        <th scope="col">status</th>
                        <th scope="col">Remarks</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($studentfees as $studentfee)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $studentfee->receipt_no }}</td>
                            <td>{{ $studentfee->student->full_name }}</td>
                            <td>{{ $studentfee->pay_amount }}</td>
                            <td>{{ $studentfee->remaining_balance }}</td>
                            @if ($studentfee->status == 1)
                                <td><span class="text-success">Paid</span> </td>
                            @else
                                <td><span class="text-danger">Due</span> </td>
                            @endif

                            <td>{{ $studentfee->remarks }}</td>



                            <td class="d-flex gap-3">
                                <a href="{{ route('admin.studentfee.edit', $studentfee) }}"
                                    class="btn btn-sm btn-primary text-white">
                                    <i class="fa fa-pencil icon-sm text-white align-middle"></i>
                                </a>
                                <a href="{{ route('admin.bill',$studentfee) }}"
                                    class="btn btn-sm btn-primary text-white">
                                    +
                                </a>

                                <form action="{{ route('admin.studentfee.destroy', $studentfee) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure want to delete')"
                                        class="btn btn-sm btn-danger text-white">
                                        <i class="fa fa-window-close-o icon-sm text-white align-middle"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
