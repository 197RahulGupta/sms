<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $courseCount = Course::count();
        $studentCount = Student::count();
        $teacherCount = Teacher::count();
        return view('dashboard',compact('courseCount','studentCount','teacherCount'));

    }
}
