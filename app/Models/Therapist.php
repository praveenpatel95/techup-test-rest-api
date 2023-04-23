<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Therapist extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'phone_no',
      'state',
      'country',
      'status',
    ];

    /**
     * Therapist services
     * @return HasMany
     */
    public function therapistServices(): HasMany
    {
        return $this->hasMany(TherapistService::class);
    }

    /**
     * Therapist belong to user
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
