<?php

namespace App\Repository\Service;

use App\Models\Service;
use Illuminate\Database\Eloquent\Collection;

interface ServiceRepositoryInterface
{
    public function get(): Collection;

    public function create(array $data): Service;
    public function update(array $data, int $id): bool;

    public function getById(int $id): Service;
    public function delete(int $id): bool;
}
