<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConvocatoriasSectores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('convocatorias_sectores', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('convocatoria_id');
            $table->unsignedBigInteger('sector_id');
            $table->foreign('convocatoria_id')
            ->references('id')
            ->on('convocatorias')
            ->constrained()
            ->onDelete('cascade');
            $table->foreign('sector_id')
            ->references('id')
            ->on('tipo_sector')
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
        //
        Schema::dropIfExists('convocatorias_sectores');
    }
}
