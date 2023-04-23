<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\CreateUpdateRequest;
use App\Http\Traits\ApiResponse;
use App\Services\ServicesService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    use ApiResponse;

    public function __construct(
        protected ServicesService $servicesService
    ){}

    /**
     * Return all services
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->success($this->servicesService->get());
    }

    /**
     * Create new service
     * @param CreateUpdateRequest $request
     * @return JsonResponse
     */
    public function store(CreateUpdateRequest $request): JsonResponse
    {
        return $this->success($this->servicesService->create($request->all()));
    }

    /**
     * Get service detail by id
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return $this->success($this->servicesService->getById($id));
    }

    /**
     * Update service detail
     * @param CreateUpdateRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(CreateUpdateRequest $request, int $id): JsonResponse
    {
        return $this->success($this->servicesService->update($request->all(), $id));
    }

    /**
     * Remove the service from storage.
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        return $this->success($this->servicesService->delete($id));
    }
}
