<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Therapist\RegisterController;

Route::post('register', [RegisterController::class, 'register']);
