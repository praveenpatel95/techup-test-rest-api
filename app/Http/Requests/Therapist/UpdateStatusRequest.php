<?php

namespace App\Http\Requests\therapist;

use App\Exceptions\ValidationRequestException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UpdateStatusRequest extends FormRequest
{
    /**
     * Validation rules for update the therapist status
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'status' => 'required|in:Accepted,Rejected',
        ];
    }

    /**
     * Failed Validation
     * @param Validator $validator
     * @return void
     * @throws ValidationRequestException
     */
    public function failedValidation(Validator $validator)
    {
        throw new ValidationRequestException($validator->errors());
    }
}
