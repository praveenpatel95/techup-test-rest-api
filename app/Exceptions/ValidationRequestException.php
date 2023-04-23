<?php

namespace App\Exceptions;

use App\Http\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Exception;

class ValidationRequestException extends Exception
{
    use ApiResponse;

    /**
     * Validation request error
     * @return JsonResponse
     */
    public function render() : JsonResponse
    {
        return $this->error(
            json_decode($this->message),
            422
        );
    }
}
