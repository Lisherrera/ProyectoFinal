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
        Schema::create('arriendos_vehiculos', function (Blueprint $table) {
            $table->string('patente');
            $table->unsignedInteger('arriendo_id');
            
            $table->primary(['patente', 'arriendo_id']);
            // $table->timestamps();

            $table->foreign('patente')->references('patente')->on('vehiculos');
            $table->foreign('arriendo_id')->references('id')->on('arriendos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arriendos_vehiculos');
    }
};
