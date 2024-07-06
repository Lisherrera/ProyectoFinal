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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->string('patente')->primary();
            $table->string('marca');
            $table->string('modelo');
            $table->smallInteger('anio');
            $table->enum('estado', ['disponible', 'arrendado', 'en mantenimiento', 'de baja']);
            $table->integer('precio');
            $table->softDeletes();
            $table->timestamps();

            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
