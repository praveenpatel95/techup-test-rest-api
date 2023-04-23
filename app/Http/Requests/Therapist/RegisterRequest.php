<?php

namespace App\Http\Requests\Therapist;

use App\Exceptions\ValidationRequestException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Validation rules for Therapist register
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'phone_no' => 'required|max:15',
            'state' => 'required|max:50',
            'country' => 'required|max:50',
            'password' => 'required|min:6|max:16|confirmed',
            "service_id.*"  => "required|integer|exists:services,id",
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
