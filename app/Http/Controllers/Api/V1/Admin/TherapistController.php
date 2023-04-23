<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\therapist\UpdateStatusRequest;
use App\Http\Traits\ApiResponse;
use App\Services\Therapist\TherapistService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TherapistController extends Controller
{
    use ApiResponse;
    public function __construct(
        protected TherapistService $therapistService,
    ){}

    /**
     * Return all therapist list
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->success($this->therapistService->get());
    }

    /**
     * Return Therapist detail by id
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return $this->success($this->therapistService->getById($id));
    }

    /**
     * Update therapist status
     * @param UpdateStatusRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function updateStatus(UpdateStatusRequest $request, int $id): JsonResponse
    {
        return $this->success($this->therapistService
            ->updateStatus($request->status, $id));
    }
}
