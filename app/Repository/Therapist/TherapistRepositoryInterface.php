<?php

namespace App\Repository\Therapist;

use App\Models\Therapist;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface TherapistRepositoryInterface
{
    public function create(User $user, array $data): Therapist;

    public function get(): Collection;

    public function getById(int $id): Therapist;
    public function updateStatus(string $status, int $id): Therapist;
}
