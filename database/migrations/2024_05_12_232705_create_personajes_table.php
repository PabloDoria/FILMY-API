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
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Campo para el nombre del personaje
            $table->unsignedBigInteger('pelicula_id'); // FK que apunta al id de la tabla peliculas
            $table->foreign('pelicula_id')->references('id')->on('peliculas');
            $table->text('descripcion'); // Campo para la descripción general
            $table->string('imagen'); // Campo para la imagen en formato binario
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personajes');
    }
};
