<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('therapist_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('therapist_id');
            $table->unsignedBigInteger('service_id');
            $table->timestamps();

            $table->foreign('therapist_id')
                ->references('id')
                ->on('therapists')
                ->onDelete('CASCADE');

            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('therapist_services');
    }
};
