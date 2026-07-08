<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sushma extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'image',
        'description',
        'employment_rate',
        'student_ratio',
        'program_offer',
    ];
}
