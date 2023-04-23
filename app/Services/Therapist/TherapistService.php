<?php

namespace App\Services\Therapist;

use App\Jobs\SendTherapistStatusEmailJob;
use App\Models\Therapist;
use App\Repository\Therapist\TherapistRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class TherapistService
{
    public function __construct(
        protected TherapistRepositoryInterface $therapistRepository,
    ){}

    /**
     * Return all therapist list
     * @return Collection
     */
    public function get(): Collection
    {
        return $this->therapistRepository->get();
    }

    /**
     * Therapist detail by id
     * @param int $id
     * @return Therapist
     */
    public function getById(int $id): Therapist
    {
        return $this->therapistRepository->getById($id);
    }

    /**
     * Update therapist status
     * @param string $status
     * @param int $id
     * @return Therapist
     */
    public function updateStatus(string $status, int $id): Therapist
    {
        $therapist = $this->therapistRepository->updateStatus($status, $id);
        //Send email to therapist
        dispatch(new SendTherapistStatusEmailJob($therapist));
        return $therapist;
    }
}
