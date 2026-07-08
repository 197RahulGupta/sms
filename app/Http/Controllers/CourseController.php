<?php

namespace App\Http\Controllers;

use App\Http\Requests\Course\StoreCourseRequest;
use App\Http\Requests\Course\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{
    public function index()
    {
        $courses= Course::latest()->get();
        return view('admin.course.index',compact('courses'));
    }

    public function create()
    {
        return view('admin.course.create');
    }

    public function store(StoreCourseRequest $request) : RedirectResponse
    {
        Course::create($request->validated());
        Alert::success('Course is created');
        return redirect(route('admin.course.index'));
    }
    public function edit(Course $course)
    {
        return view ("admin.course.edit",compact('course'));
    }
    public function update(UpdateCourseRequest $request,Course $course)
    {
        $course-> update($request->validated());
        Alert::success('Course is updated');
        return redirect(route('admin.course.index'));
    }
    public function destroy(Course $course)
    {
        $course->delete();
        Alert::success("Course is deleted");
        return back();
    }
}
