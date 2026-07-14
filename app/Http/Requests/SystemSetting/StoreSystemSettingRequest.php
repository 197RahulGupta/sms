<?php

namespace App\Http\Requests\SystemSetting;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreSystemSettingRequest extends FormRequest
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
            'organization_name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'logo' => ['required', 'image'],
            'pan_no' => ['required', 'number'],
            'phone_number' => ['required', 'number'],
            'telephone_number' => ['required', 'number'],
            'footer_description' => ['required', 'string'],
            'map_url' => ['required', 'url'],
            'email' => ['required', 'string'],
            'facebook_url' => ['required', 'url'],
            'tiktok_url' => ['required', 'url'],
            'instagram_url' => ['required', 'url'],

        ];
    }
}
