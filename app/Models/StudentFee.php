<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentFee extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'receipt_no',
        'paid_date',
        'student_id',
        'pay_amount',
        'pre_balance',
        'remaining_balance',
        'remarks',
        'received_by',
        'status',
        
    ];
      public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
