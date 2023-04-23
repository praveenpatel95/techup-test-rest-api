<?php

namespace App\Repository\Therapist\Service;

use App\Models\Therapist;

interface TherapistServiceRepositoryInterface
{
    public function create(Therapist $therapist, array $data): void;
}
