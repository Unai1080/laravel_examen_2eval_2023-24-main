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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string("nif");
            $table->string("nombre");
            $table->string("apellido");
            $table->date("fechanacimiento");
            $table->string("direccion");
            $table->integer("telefono");
            $table->string("email");
            $table->boolean("vehiculo");
            $table->integer("ciclo_id");
            // $table->foreignId('ciclo_id')
            //     ->constrained()
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
            //$table->foreignId('ciclo_id')->references('id')->on('ciclos');
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
    
    public function ciclo(){
        return $this->belongsTo('App\Models\Ciclo');
    }
};
