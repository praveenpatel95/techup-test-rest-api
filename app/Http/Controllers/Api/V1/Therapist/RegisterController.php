<?php

namespace App\Http\Controllers\Api\V1\Therapist;

use App\Http\Controllers\Controller;
use App\Http\Requests\Therapist\RegisterRequest;
use App\Http\Traits\ApiResponse;
use App\Services\Therapist\RegisterService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use ApiResponse;

    public function __construct(
        protected RegisterService $registerService
    ){}

    /**
     * Register therapist
     * @param RegisterRequest $request
     * @return JsonResponse
     * @throws \App\Exceptions\BadRequestException
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        return $this->success($this->registerService->register($request->all()));
    }
}
