<?php
use Illuminate\Support\Facades\Route;

Route::prefix('auth')
    ->group(base_path('routes/api/v1/auth.php'));

Route::prefix('admin')
    ->group(base_path('routes/api/v1/admin.php'));

Route::prefix('therapist')
    ->group(base_path('routes/api/v1/therapist.php'));
