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
        Schema::create('encuentro_equipos', function (Blueprint $table) {
            $table->id();
            $table->string('resultado');
            $table->unsignedBigInteger('encuentro_id');
            $table->foreign('encuentro_id')->references('id')->on('encuentros');
            $table->unsignedBigInteger('equipo_local_id');
            $table->unsignedBigInteger('equipo_visitante_id');
            $table->foreign('equipo_local_id')->references('id')->on('equipos');
            $table->foreign('equipo_visitante_id')->references('id')->on('equipos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encuentro_equipos');
    }
};
