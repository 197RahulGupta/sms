<?php

namespace App\Http\Requests\Feature;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreFeatureRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

  
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'icons' => ['required', 'string'],
            'description' => ['required', 'string'],
           
        ];
    }
}
