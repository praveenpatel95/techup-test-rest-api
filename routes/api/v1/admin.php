<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Admin\ServiceController;
use App\Http\Controllers\Api\V1\Admin\TherapistController;

Route::middleware(['auth:api', 'role:admin'])->group(function () {
    Route::apiResource('service',ServiceController::class);

    //Therapist
    Route::get('therapist', [TherapistController::class, 'index']);
    Route::get('therapist/{id}', [TherapistController::class, 'show']);
    Route::post('therapist/{id}', [TherapistController::class, 'updateStatus']);
});
