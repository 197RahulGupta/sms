<?php

namespace App\Http\Requests\Student;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreStudentrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string'],
            'course_id' => ['required', 'string'],
            'contact_number' => ['required', 'string'],
            'guardian_name' => ['required', 'string'],
            'guardian_number' => ['required', 'string'],
            'email' => ['required', 'string'],
            'date_of_birth' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'address' => ['required', 'string'],
            'reffered_by' => ['required', 'string'],
            'qualification' => ['required', 'string'],
            'year' => ['required', 'string'],
            'school_name' => ['required', 'string'],
            'gpa' => ['required', 'string'],
            'password' => ['nullable', 'string'],
            'enquiry' => ['required', 'string'],
       
        ];
    }
}
