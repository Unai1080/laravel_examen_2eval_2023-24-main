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
        Schema::create('fct', function (Blueprint $table) {
            $table->id();
            $table->integer('id_alumno');
            $table->integer('id_enpresa');
            $table->date("fechaInicio");
            $table->date("fechaFin");
            $table->integer("valoracionAlumno")->nullable();
            $table->integer("valoracionEmpresa")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
