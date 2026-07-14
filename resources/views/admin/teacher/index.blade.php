@extends('layout.master')
@section('container')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <a href="{{ route('admin.teacher.create') }}" class="btn btn-sm btn-primary"> <i
                        class="mdi mdi-home"></i></a>
                <span class=" text-white me-2">
                </span> Teacher Index Page
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
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Course</th>
                        <th scope="col">Email</th>
                        <th scope="col">Is_active</th>
                        <th scope="col">Action</th>                
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><img src="{{ $teacher->image }}" alt="" height=100></td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->course->course_name }}</td>
                            <td>{{ $teacher->email }}</td>
                            @if ($teacher->is_active == 1)
                            <td><span class="text-success">Active</span> </td>
                            @else
                            <td><span class="text-danger">InActive</span> </td>
                                
                            @endif
                            


                            <td class="d-flex gap-3">
                                <a href="{{ route('admin.teacher.edit', $teacher) }}"
                                    class="btn btn-sm btn-primary text-white">
                                    <i class="fa fa-pencil icon-sm text-white align-middle"></i>
                                </a>

                                <form action="{{ route('admin.teacher.destroy', $teacher) }}" method="post">
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
