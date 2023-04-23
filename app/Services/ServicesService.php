<?php

namespace App\Services;

use App\Models\Service;
use App\Repository\Service\ServiceRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ServicesService
{


    public function __construct(
        protected ServiceRepositoryInterface $serviceRepository
    ){}

    /**
     * Get all services
     * @return Collection
     */
    public function get(): Collection
    {
        return $this->serviceRepository->get();
    }

    /**
     * Create new service
     * @param array $data
     * @return Service
     */
    public function create(array $data): Service
    {
        return $this->serviceRepository->create($data);
    }

    /**
     * Update service detail by id
     * @param array $data
     * @param int $id
     * @return bool
     */
    public function update(array $data, int $id): bool
    {
        return $this->serviceRepository->update($data, $id);
    }

    /**
     * Get service detail by id
     * @param int $id
     * @return Service
     */
    public function getById(int $id): Service
    {
        return $this->serviceRepository->getById($id);
    }

    /**
     * Delete service by id
     * @param $id
     * @return bool
     */
    public function delete($id){
        return $this->serviceRepository->delete($id);
    }
}
