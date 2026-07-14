<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentFee\StoreStudentFeeRequest;
use App\Http\Requests\StudentFee\UpdateStudentFeeRequest;
use App\Models\Student;
use App\Models\StudentFee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class StudentFeeController extends Controller
{
    public function index()
    {
        $studentfees = StudentFee::latest()->get();

        return view('admin.studentfee.index', compact('studentfees'));
    }

    public function studentFee(Student $student)
    {
        return view('admin.studentfee.create', compact('student'));
    }

    public function studentFeeStore(StoreStudentFeeRequest $request, Student $student): RedirectResponse
    {
        $status = ($request->remaining_balance == 0) ? 1 : 0;
        $studentfee = StudentFee::create($request->validated() + [
            'student_id' => $student->id,
            'status' => $status,
        ]);
        Alert::success('StudentFee is created');
        return redirect(route('admin.bill',$studentfee));

    }

    public function edit(StudentFee $studentfee)
    {
        $students = Student::all();

        return view('admin.studentfee.edit', compact('studentfee', 'students'));
    }

    public function update(UpdateStudentFeeRequest $request, StudentFee $studentfee)
    {
        $studentfee->update($request->validated());
        Alert::success('StudentFee is updated');

        return redirect(route('admin.studentfee.index'));
    }

    public function destroy(StudentFee $studentfee)
    {
        $studentfee->delete();
        Alert::success('StudentFee is deleted');

        return back();
    }
    public function bill(StudentFee $studentfee)
    {
        return view ('admin.studentfee.bill',compact('studentfee'));
    }
}
