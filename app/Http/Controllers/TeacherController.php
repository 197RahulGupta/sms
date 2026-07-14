<?php

namespace App\Http\Controllers;

use App\Http\Requests\Teacher\StoreTeacherRequest;
use App\Http\Requests\Teacher\UpdateTeacherRequest;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::latest()->get();
        return view('admin.teacher.index', compact('teachers'));
    }

    public function create()
    {
        $courses = Course::all();

        return view('admin.teacher.create', compact('courses'));

    }

    public function store(StoreTeacherRequest $request): RedirectResponse
    {
        Teacher::create($request->validated());
        Alert::success('Teacher is created');

        return redirect(route('admin.teacher.index'));
    }

    public function edit(Teacher $teacher)
    {
        $courses = Course::all();

        return view('admin.teacher.edit', compact('teacher', 'courses'));
    }

    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        $teacher->update($request->validated());
        Alert::success('Teacher is updated');

        return redirect(route('admin.teacher.index'));
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        Alert::success('Teacher is deleted');

        return back();
    }
}
