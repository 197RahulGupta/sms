<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'course_id' => ['required', 'string'],
            'address' => ['required', 'string'],
            'image' => ['nullable', 'image'],
            'is_active' => ['required', 'string'],
            'join_date' => ['required', 'string'],
            'leave_date' => ['nullable', 'string'],
            'salary' => ['required', 'string'],
           
        ];
    }
}
