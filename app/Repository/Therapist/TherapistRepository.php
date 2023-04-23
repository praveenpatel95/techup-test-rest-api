<?php

namespace App\Repository\Therapist;

use App\Exceptions\BadRequestException;
use App\Models\Therapist;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class TherapistRepository implements TherapistRepositoryInterface
{
    /**
     * Create therapist
     * @param User $user
     * @param array $data
     * @return Therapist
     * @throws BadRequestException
     */
    public function create(User $user, array $data): Therapist
    {
        try {
            return $user->therapist()->create($data);
        }
        catch (Exception $exception){
            throw new BadRequestException($exception->getMessage());
        }
    }

    /**
     * Get all therapist with user detail
     * @return Collection
     */
    public function get(): Collection
    {
        return Therapist::with(['user'])->get();
    }

    /**
     * Get therapist detail by id
     * @param int $id
     * @return Therapist
     * @throws BadRequestException
     */
    public function getById(int $id): Therapist
    {
        try {
            return Therapist::with('user')->findOrFail($id);
        }
        catch (Exception $exception){
            throw new BadRequestException("No Therapist found by this id.");
        }
    }

    /**
     * Update therapist status
     * @param string $status
     * @param int $id
     * @return Therapist
     * @throws BadRequestException
     */
    public function updateStatus(string $status, int $id): Therapist
    {
        try {
            $therapist = Therapist::findOrFail($id);
            $therapist->status = $status;
            $therapist->save();
            return $therapist;
        }
        catch (Exception $exception){
            throw new BadRequestException($exception->getMessage());
        }
    }
}
