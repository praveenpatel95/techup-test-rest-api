<?php

namespace App\Services\Therapist;

use App\Exceptions\BadRequestException;
use App\Jobs\SendRegisterEmailJob;
use App\Repository\Auth\UserRepositoryInterface;
use App\Repository\Therapist\Service\TherapistServiceRepositoryInterface;
use App\Repository\Therapist\TherapistRepositoryInterface;
use Illuminate\Support\Facades\DB;

class RegisterService
{

    public function __construct(
        protected UserRepositoryInterface $userRepository,
        protected TherapistRepositoryInterface $therapistRepository,
        protected TherapistServiceRepositoryInterface $therapistServiceRepository,
    ){}

    /**
     * Register new therapist
     * @param array $data
     * @return void
     * @throws BadRequestException
     */
    public function register(array $data): void
    {
        DB::beginTransaction();
        try {
            //Create user
            $user = $this->userRepository->create($data);

            //Create therapist
            $therapist = $this->therapistRepository->create($user, $data);

            //Create therapist services
            if (isset($data['service_id'])) {
                $services = [];
                foreach ($data['service_id'] as $key => $value) {
                    $service = [
                        'service_id' => $value
                    ];
                    array_push($services, $service);
                }
                $this->therapistServiceRepository->create($therapist, $services);
                //Send email to admin
                dispatch(new SendRegisterEmailJob($user));
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw new BadRequestException($exception->getMessage());
        }
    }
}
