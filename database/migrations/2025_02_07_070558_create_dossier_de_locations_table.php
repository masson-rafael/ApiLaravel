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
        Schema::create('dossier_de_locations', function (Blueprint $table) {
            $table->id('idlocation');
            $table->boolean('paye');
            $table->foreignId('codereservation')->constrained()->onDelete('cascade')->references('codereservation')->on('reservations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossier_de_locations');
    }
};
