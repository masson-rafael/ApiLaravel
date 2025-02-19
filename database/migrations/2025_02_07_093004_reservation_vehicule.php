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
        Schema::create('reservation_vehicule', function (Blueprint $table) {
            $table->string('codereservation', 191)->index();
            $table->foreign('codereservation')->constrained()->onDelete('cascade')->references('codereservation')->on('reservations');
            $table->foreignId('matricule')->constrained()->onDelete('cascade')->references('matricule')->on('vehicules');
            $table->primary(['codereservation', 'matricule']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_vehicule');
    }
};
