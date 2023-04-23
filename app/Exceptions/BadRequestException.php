<?php

namespace App\Exceptions;
use App\Http\Traits\ApiResponse;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BadRequestException extends Exception
{
    use ApiResponse;

    /**
     * Handle bad request
     * @param Request $request
     * @return JsonResponse
     */
    function render(Request $request): JsonResponse
    {
        return $this->error($this->message,
            400
        );
    }
}
