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
        //https://laravel.com/docs/4.2/schema --> tipos de datos para creación de tabla
        Schema::create('associates', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('id_type', array('Cédula De Ciudadanía', 'Número De Identificación Tributaria', 'Tarjeta De Identidad', 'Cédula De Extranjería', 'Pasaporte', 'Registro Civil'));
            $table->integer('id_number');
            $table->string('first_name', 50);
            //$table->date('id_expired_at')->nullable();
            $table->string('other_names', 50)->nullable();
            $table->string('first_lastname', 50);
            $table->string('other_lastnames', 50)->nullable();
            $table->enum('gender', array('Masculino', 'Femenino'))->nullable();
            $table->enum('status', array('Activo', 'Inactivo'))->nullable();
            //$table->date('birth_date')->nullable();
            //$table->string('email')->nullable();
            $table->timestamps(); //Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associates');
    }
};
