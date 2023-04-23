<?php

namespace App\Repository\Therapist\Service;

use App\Exceptions\BadRequestException;
use App\Models\Therapist;
use Exception;

class TherapistServiceRepository implements TherapistServiceRepositoryInterface
{
    /**
     * Create therapist services
     * @param Therapist $therapist
     * @param array $data
     * @return void
     */

    public function create(Therapist $therapist, array $data): void
    {
        try {
            $therapist->therapistServices()->createMany($data);
        }
        catch (Exception $exception){
            throw new BadRequestException($exception->getMessage());
        }
    }
}
