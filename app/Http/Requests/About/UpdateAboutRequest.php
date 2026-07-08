<?php

namespace App\Http\Requests\About;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
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
            
            'title' => ['required', 'string'],
            'image' => ['nullable', 'image'],
            'description' => ['required', 'string'],
            'employment_rate' => ['required', 'string'],
            'student_ratio' => ['required', 'string'],
            'program_offer' => ['required', 'string'],
        ];
    }
}
