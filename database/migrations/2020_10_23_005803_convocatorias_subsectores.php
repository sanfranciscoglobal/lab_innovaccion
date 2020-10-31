<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConvocatoriasSubsectores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('convocatorias_subsectores', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('convocatoria_id');
            $table->unsignedBigInteger('subsector_id');
            $table->foreign('convocatoria_id')
            ->references('id')
            ->on('convocatorias')
            ->constrained()
            ->onDelete('cascade');
            $table->foreign('subsector_id')
            ->references('id')
            ->on('tipo_subsector')
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
        Schema::dropIfExists('convocatorias_subsectores');
    }
}
