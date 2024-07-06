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
        Schema::create('arriendos', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement()->primary();
            $table->string('rut');          
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('tipo');
            $table->dateTime('fechaI');
            $table->dateTime('fechaT');
            $table->softDeletes();
            $table->timestamps();

            
            $table->foreign('email')->references('email')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arriendos');
    }
};
