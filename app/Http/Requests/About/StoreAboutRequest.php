<?php

namespace App\Http\Requests\About;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreAboutRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

  
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'image' => ['required', 'image'],
            'description' => ['required', 'string'],
            'employment_rate' => ['required', 'string'],
            'student_ratio' => ['required', 'string'],
            'program_offer' => ['required', 'string'],
        ];
    }
}
