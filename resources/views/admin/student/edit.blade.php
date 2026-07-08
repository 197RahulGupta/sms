@extends('layout.master')
@section('container')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <a href="{{ route('admin.student.index') }}">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-home"></i>
                    </span> </a> Student Edit Page
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
            <form action="{{ route('admin.student.update', $student) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputTitle1" class="form-label">Full_Name</label>
                    <input type="text" class="form-control" value="{{ $student->full_name }}" name="full_name"
                        id="exampleInputTitle1" aria-describedby="titleHelp" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputTitle1" class="form-label">Course_Id</label>
                    <select name="course_id" class="form-select">
                        <option value="">Select Course</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}" {{ $student->course_id == $course->id ? 'selected' : '' }}>
                                {{ $course?->course_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Contact_Number</label>
                    <input type="number" class="form-control" value="{{ $student->contact_number }}" readonly
                        name="contact_number" id="exampleInputImage1" aria-describedby="imageHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputTitle1" class="form-label">Guardian_Name</label>
                    <input type="text" class="form-control" value="{{ $student->guardian_name }}" readonly
                        name="guardian_name" id="exampleInputTitle1" aria-describedby="titleHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Guardian_Number</label>
                    <input type="number" class="form-control" value="{{ $student->guardian_number }}"
                        name="guardian_number" id="exampleInputImage1" aria-describedby="imageHelp" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Email</label>
                    <input type="email" class="form-control" value="{{ $student->email }}" name="email"
                        id="exampleInputImage1" aria-describedby="imageHelp" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Date_of_Birth</label>
                    <input type="date" class="form-control" value="{{ $student->date_of_birth }}" name="date_of_birth"
                        id="exampleInputImage1" aria-describedby="imageHelp" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-select">
                        <option value="">Select Gender</option>
                        <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Other" {{ $student->gender == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ $student->address }}"
                        id="exampleInputImage1" aria-describedby="imageHelp" readonly>
                </div>

                <div class="mb-3">
                    <label for="exampleInputDescription1" class="form-label">Reffered_By</label>
                    <input type="text" class="form-control" value="{{ $student->reffered_by }}"
                        name='reffered_by'id="exampleInputImage1" aria-describedby="imageHelp" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription1" class="form-label">Qualification</label>
                    <input type="text" class="form-control" value="{{ $student->qualification }}"
                        name='qualification'id="exampleInputImage1" aria-describedby="imageHelp" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription1" class="form-label">Year</label>
                    <input type="number" class="form-control" value="{{ $student->year }}"
                        name='year'id="exampleInputImage1" aria-describedby="imageHelp" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription1" class="form-label">School_Name</label>
                    <input type="text" class="form-control" value="{{ $student->school_name }}"
                        name='school_name'id="exampleInputImage1" aria-describedby="imageHelp" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription1" class="form-label">Gpa</label>
                    <input type="number" class="form-control" value="{{ $student->gpa }}"
                        name='gpa'id="exampleInputImage1" aria-describedby="imageHelp" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription1" class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="1" {{ $student->status == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $student->status == '0' ? 'selected' : '' }}>InActive</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Is Enquiry?</label>
                    <select name="enquiry" class="form-select">
                        <option value="1" {{ $student->enquiry == '1' ? 'selected' : '' }}>Enquiry</option>
                        <option value="0" {{ $student->enquiry == '0' ? 'selected' : '' }}>Admission</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


    </div>
@endsection
