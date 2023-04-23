<?php

namespace App\Providers;

use App\Repository\Auth\UserRepository;
use App\Repository\Auth\UserRepositoryInterface;
use App\Repository\Service\ServiceRepository;
use App\Repository\Service\ServiceRepositoryInterface;
use App\Repository\Therapist\Service\TherapistServiceRepository;
use App\Repository\Therapist\Service\TherapistServiceRepositoryInterface;
use App\Repository\Therapist\TherapistRepository;
use App\Repository\Therapist\TherapistRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(TherapistRepositoryInterface::class, TherapistRepository::class);
        $this->app->bind(TherapistServiceRepositoryInterface::class, TherapistServiceRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
