<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * CREAMOS LAS MIGRACIONES O TABLAS
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();

            $table->string('Nombres');
            $table->string('Apellidos');
            $table->date('fechaNacimiento');
            $table->string('sexo');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('email');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
