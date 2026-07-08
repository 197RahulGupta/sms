@extends('layout.master')
@section('container')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <a href="{{ route('admin.student.index') }}" class="btn btn-sm btn-primary"> <i
                        class="mdi mdi-home"></i></a>
                <span class=" text-white me-2">
                </span> Student Index Page
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
                        <th scope="col">Full_Name</th>
                        <th scope="col">Course</th>
                        <th scope="col">Contact_Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Reffered_By</th>
                        <th scope="col">Status</th>
                        <th scope="col">Enquiry</th>
                        <th scope="col">Action</th>                
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $student->full_name }}</td>
                            <td>{{ $student->course->course_name }}</td>
                            <td>{{ $student->contact_number }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->reffered_by }}</td>
                            @if ($student->status == 1)
                            <td><span class="text-success">Active</span> </td>
                            @else
                            <td><span class="text-danger">InActive</span> </td>
                                
                            @endif
                             @if ($student->enquiry == 1)
                            <td><span class="text-success">Enquiry</span> </td>
                            @else
                            <td><span class="text-danger">Admission</span> </td>
                                
                            @endif



                            <td class="d-flex gap-3">
                                <a href="{{ route('admin.student.edit', $student) }}"
                                    class="btn btn-sm btn-primary text-white">
                                    <i class="fa fa-pencil icon-sm text-white align-middle"></i>
                                </a>

                                <form action="{{ route('admin.student.destroy', $student) }}" method="post">
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
