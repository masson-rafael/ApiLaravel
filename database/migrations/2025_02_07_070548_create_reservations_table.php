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
        Schema::create('reservations', function (Blueprint $table) {
            $table->string('codereservation', 191)->primary();
            $table->string('datereservation');
            $table->string('datealler');
            $table->string('dateretour');
            $table->foreignId('numeroclient')->constrained()->onDelete('cascade')->references('numeroclient')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
