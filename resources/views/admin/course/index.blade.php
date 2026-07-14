@extends('layout.master')
@section('container')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <a href="{{ route('admin.course.create') }}" class="btn btn-sm btn-primary"> +</a>
                <span class=" text-white me-2">
                </span> Course Index Page
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
                        <th scope="col">Course_Name</th>
                        <th scope="col">Fee</th>
                        <th scope="col">Time</th>
                        <th scope="col">Shift</th>
                        <th scope="col">Instructor</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->fee }}</td>
                            <td>{{ $course->time }}</td>
                            <td>{{ $course->shift }}</td>
                            <td>{{ $course->instructor }}</td>


                            <td class="d-flex gap-3">
                                <a href="{{ route('admin.course.edit', $course) }}"
                                    class="btn btn-sm btn-primary text-white">
                                    <i class="fa fa-pencil icon-sm text-white align-middle"></i>
                                </a>

                                <form action="{{ route('admin.course.destroy', $course) }}" method="post">
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
