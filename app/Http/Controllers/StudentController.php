<?php

namespace App\Http\Controllers;

use App\Http\Requests\Course\StoreCourseRequest;
use App\Http\Requests\Course\UpdateCourseRequest;
use App\Http\Requests\Student\StoreStudentrequest;
use App\Http\Requests\Student\UpdateStudentRequest;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public function index()
    {
        $students= Student::latest()->get();
        return view('admin.student.index',compact('students'));
    }

    public function create()
    {
        $courses= Course::all();
        return view('admin.student.create',compact('courses'));
    
    }

    public function store(StoreStudentrequest $request) : RedirectResponse
    {
        Student::create($request->validated());
        Alert::success('Student is created');
        return redirect(route('admin.student.index'));
    }
    public function edit(Student $student)
    {
        $courses= Course::all();
        return view ("admin.student.edit",compact('student','courses'));
    }
    public function update(UpdateStudentRequest $request,Student $student)
    {
        $student-> update($request->validated());
        Alert::success('Student is updated');
        return redirect(route('admin.student.index'));
    }
    public function destroy(Student $student)
    {
        $student->delete();
        Alert::success("Student is deleted");
        return back();
    }
}
