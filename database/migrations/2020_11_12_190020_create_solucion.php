<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolucion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solucion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('problemas_id')->constrained('problemas');
            $table->boolean('registrar');
            $table->foreignId('convocatoria_sectores_id')->constrained('convocatorias_sectores');
            $table->boolean('retroalimentacion');
            $table->boolean('disponibilidad');
            $table->text('solucion');
            $table->text('pdf');
            $table->Integer('desarrollo')->nullable();
            $table->Integer('inovacion')->nullable();
            $table->text('text1')->nullable();
            $table->text('text2')->nullable();
            $table->text('text3')->nullable();
            $table->String('telefono')->nullable();
            $table->String('facebook')->nullable();
            $table->String('instigram')->nullable();
            $table->String('linkedin')->nullable();
            $table->String('twitter')->nullable();
            $table->String('youtube')->nullable();
            $table->boolean('terminos')->nullable();
            $table->text('mejorada')->nullable();
            $table->text('tiempo')->nullable();
            $table->text('equipo')->nullable();
            $table->text('recursos')->nullable();
            $table->text('propuesta')->nullable();
            $table->text('financiamiento')->nullable();
            $table->text('pdfcomple')->nullable();
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
        Schema::dropIfExists('solucion');
    }
}
