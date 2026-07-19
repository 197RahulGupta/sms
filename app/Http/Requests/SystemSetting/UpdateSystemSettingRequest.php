<?php

namespace App\Http\Requests\SystemSetting;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSystemSettingRequest extends FormRequest
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
            'pan_no' => ['required', 'integer'],
            'phone_number' => ['required', 'integer'],
            'telephone_number' => ['required', 'integer'],
            'footer_description' => ['required', 'integer'],
            'map_url' => ['required', 'url'],
            'email' => ['required', 'string'],
            'facebook_url' => ['required', 'url'],
            'tiktok_url' => ['required', 'url'],
            'instagram_url' => ['required', 'url'],

        ];
    }
}
