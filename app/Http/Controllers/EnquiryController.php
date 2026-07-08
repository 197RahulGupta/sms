<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreStudentrequest;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EnquiryController extends Controller
{
     public function create()
    {
        $courses=Course::all();
        return view('enquiry.create',compact('courses'));
    
    }
     public function store(StoreStudentrequest $request) : RedirectResponse
    {
        Student::create($request->validated());
        Alert::success('Enquiry is created');
        return redirect(route('home'));
    }
}
