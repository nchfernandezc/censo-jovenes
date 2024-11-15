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
        Schema::create('registro', function (Blueprint $table) {
            $table->id();
            $table->integer('cedula')->length(8)->notNullable();
            $table->string('nombre', 45);
            $table->string('apellido', 45);
            $table->integer('edad')->length(3);
            $table->integer('telefono')->length(11);
            $table->string('email', 45);
            $table->string('municipio', 45);
            $table->string('parroquia', 45);
            $table->string('ocupacion', 45);
            $table->string('grado', 45);
            $table->string('categoria_p', 45);
            $table->text('descripcion_p'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro');
    }
};
