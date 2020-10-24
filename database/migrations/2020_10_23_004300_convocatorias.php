<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Convocatorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('convocatorias', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('tipoconvocatoria_id');
            $table->date('fecha_inicio');
            $table->date('fecha_cierre');
            $table->string('descripcion');
            $table->string('imagen');
            $table->boolean('terminos');
            $table->foreignId('user_id')->constrained();
            $table->foreign('tipoconvocatoria_id')
            ->references('id')
            ->on('tipo_convocatoria')
            ->constrained()
            ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('convocatorias');
    }
}
