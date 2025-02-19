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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->string('matricule', 191)->primary();
            $table->string('modele');
            $table->integer('nombredeplace');
            $table->float('prix');
            $table->boolean('disponibilite');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
