<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TherapistService extends Model
{
    use HasFactory;

    protected $fillable = [
        'therapist_id',
        'service_id',
    ];
}
