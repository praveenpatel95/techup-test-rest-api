<?php

namespace App\Http\Requests\Service;

use App\Exceptions\ValidationRequestException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class CreateUpdateRequest extends FormRequest
{

    /**
     * Validation rules for create / update the service
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'description' => 'required',
            'status' => 'required|in:0,1',
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
