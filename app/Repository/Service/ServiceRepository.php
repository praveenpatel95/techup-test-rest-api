<?php

namespace App\Repository\Service;

use App\Exceptions\BadRequestException;
use App\Models\Service;
use Illuminate\Database\Eloquent\Collection;
use Exception;

class ServiceRepository implements ServiceRepositoryInterface
{
    /**
     * Get all services
     * @return Collection
     */
    public function get(): Collection
    {
        return Service::all();
    }

    /**
     * Create new service
     * @param array $data
     * @return Service
     * @throws BadRequestException
     */
    public function create(array $data): Service
    {
        try {
            return Service::create($data);
        } catch (Exception $exception) {
            throw new BadRequestException($exception->getMessage());
        }
    }

    /**
     * Update service detail
     * @param array $data
     * @param int $id
     * @return bool
     * @throws BadRequestException
     */
    public function update(array $data, int $id): bool
    {
        try {
            return Service::findOrFail($id)->update($data);
        } catch (Exception $exception) {
            throw new BadRequestException($exception->getMessage());
        }
    }

    /**
     * Get service detail by id
     * @param int $id
     * @return Service
     * @throws BadRequestException
     */
    public function getById(int $id): Service
    {
        try {
            return Service::findOrFail($id);
        } catch (Exception $exception) {
            throw new BadRequestException("No data found");
        }
    }

    /**
     * Delete service
     * @param int $id
     * @return bool
     * @throws BadRequestException
     */
    public function delete(int $id): bool
    {
        try {
            return Service::findOrFail($id)->delete($id);
        } catch (Exception $exception) {
            throw new BadRequestException("No data found");
        }
    }
}
