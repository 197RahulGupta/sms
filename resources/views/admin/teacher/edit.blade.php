@extends('layout.master')
@section('container')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <a href="{{ route('admin.teacher.index') }}">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-home"></i>
                    </span> </a> Teacher Edit Page
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
            <form action="{{ route('admin.teacher.update', $teacher) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputTitle1" class="form-label">Name</label>
                    <input type="text" class="form-control" value="{{ $teacher->name }}" name="name"
                        id="exampleInputTitle1" aria-describedby="titleHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputTitle1" class="form-label">Course</label>
                    <select name="course_id" class="form-select">
                        <option value="">Select Course</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}" {{ $teacher->course_id == $course->id ? 'selected' : '' }}>
                                {{ $course?->course_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Email</label>
                    <input type="text" class="form-control" value="{{ $teacher->email }}" 
                        name="email" id="exampleInputImage1" aria-describedby="imageHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputTitle1" class="form-label">Address</label>
                    <input type="text" class="form-control" value="{{ $teacher->address }}" 
                        name="address" id="exampleInputTitle1" aria-describedby="titleHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Image</label>
                    <input type="file" class="form-control" value="{{ $teacher->image }}"
                        name="image" id="exampleInputImage1" aria-describedby="imageHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription1" class="form-label">Active</label>
                    <select name="is_active" class="form-select">
                        <option value="1" {{ $teacher->is_active == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $teacher->is_active == '0' ? 'selected' : '' }}>InActive</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Join_Date</label>
                    <input type="date" class="form-control" value="{{ $teacher->join_date }}" name="join_date"
                        id="exampleInputImage1" aria-describedby="imageHelp" >
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Leave_Date</label>
                    <input type="date" class="form-control" name="leave_date" value="{{ $teacher->leave_date }}"
                        id="exampleInputImage1" aria-describedby="imageHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputDescription1" class="form-label">Salary</label>
                    <input type="text" class="form-control" value="{{ $teacher->salary }}"
                        name='salary'id="exampleInputImage1" aria-describedby="imageHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


    </div>
@endsection
