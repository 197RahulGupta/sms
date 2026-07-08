<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('enquiry.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Student Registration Form</h4>
                        </div>

                        <div class="card-body">
                            <form action="" method="POST">

                                <div class="row">
                                    <!-- Full Name -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" name="full_name" class="form-control" required>
                                    </div>

                                    <!-- Course -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Course</label>
                                        <select name="course_id" class="form-select">
                                            <option value="">Select Course</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course?->course_name }}</option>
                                            @endforeach
                                            <!-- Courses from database -->
                                        </select>
                                    </div>

                                    <!-- Contact Number -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Contact Number</label>
                                        <input type="text" name="contact_number" class="form-control">
                                    </div>

                                    <!-- Guardian Name -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Guardian Name</label>
                                        <input type="text" name="guardian_name" class="form-control">
                                    </div>

                                    <!-- Guardian Number -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Guardian Number</label>
                                        <input type="text" name="guardian_number" class="form-control">
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>

                                    <!-- Date of Birth -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" name="date_of_birth" class="form-control">
                                    </div>

                                    <!-- Gender -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Gender</label>
                                        <select name="gender" class="form-select">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea name="address" rows="3" class="form-control"></textarea>
                                    </div>

                                    <!-- Referred By -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Reffered By</label>
                                        <input type="text" name="reffered_by" class="form-control">
                                    </div>

                                    <!-- Qualification -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Qualification</label>
                                        <input type="text" name="qualification" class="form-control">
                                    </div>

                                    <!-- Year -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Year</label>
                                        <input type="text" name="year" class="form-control">
                                    </div>

                                    <!-- School Name -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">School Name</label>
                                        <input type="text" name="school_name" class="form-control">
                                    </div>

                                    <!-- GPA -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">GPA</label>
                                        <input type="text" name="gpa" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Is Enquiry?</label>
                                        <select name="enquiry" class="form-select">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>



                                </div>

                                <div class="text-end">
                                    <button type="reset" class="btn btn-secondary">
                                        Reset
                                    </button>

                                    <button type="submit" class="btn btn-primary">
                                        Register Student
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>