<?php

namespace App\Http\Requests\StudentFee;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreStudentFeeRequest extends FormRequest
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
            'receipt_no' => ['required', 'string'],
            'paid_date' => ['required', 'string'],
            'pay_amount' => ['required', 'string'],
            'pre_balance' => ['required', 'string'],
            'remaining_balance' => ['required', 'string'],
            'remarks' => ['required', 'string'],
            'received_by' => ['required', 'string'],

        ];
    }
}
