<?php

namespace App\Jobs;

use App\Mail\SendTherapistStatusEmail;
use App\Models\Therapist;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendTherapistStatusEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        protected Therapist $therapist
    ){}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->therapist->user->email)
            ->send(new SendTherapistStatusEmail($this->therapist));
    }
}
