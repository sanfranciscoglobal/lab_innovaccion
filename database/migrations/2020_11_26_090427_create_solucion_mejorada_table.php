<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolucionMejoradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solucion_mejorada', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 1000);
            $table->string('tiempo', 280)->nullable();
            $table->string('equipo', 1000)->nullable();
            $table->string('recursos', 1000)->nullable();
            $table->string('modelo', 1000)->nullable();
            $table->string('financiamiento', 280)->nullable();
            $table->string('archivo', 280)->nullable();
            $table->boolean('terminos');
            $table->unsignedBigInteger('solucion_id');
            $table->foreign('solucion_id')
                ->references('id')
                ->on('soluciones')
                ->constrained()
                ->onDelete('cascade')
            ;
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
        Schema::dropIfExists('solucion_mejorada');
    }
}
