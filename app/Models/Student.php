<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
     use SoftDeletes;
    protected $fillable = [
        'full_name',
        'course_id',
        'contact_number',
        'guardian_name',
        'guardian_number',
        'email',
        'date_of_birth',
        'gender',
        'address',
        'reffered_by',
        'qualification',
        'year',
        'school_name',
        'gpa',
        'status',
        'password',
        'enquiry',
    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function studentFees()
    {
        return $this->hasMany(StudentFee::class);
    }
    public function latestRemainingBalance()
     {
         // Fetch the latest fee record sorted by id or paid_date
         $latestFee = $this->studentFees()->latest('id')->first();

         // If a payment history exists, return its remaining balance.
         // Otherwise, return the initial course fee.
         return $latestFee ? $latestFee->remaining_balance : ($this->course->fee ?? 0);
     }

}
