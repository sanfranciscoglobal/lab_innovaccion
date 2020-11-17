<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoluciontipoinnovasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soluciontipoinnovas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('solucion_id');
            $table->unsignedBigInteger('tipoinnovacion_id');
   
            $table->foreign('solucion_id')
                ->references('id')
                ->on('soluciones')
                ->constrained()
                ->onDelete('cascade')
            ;
            $table->foreign('tipoinnovacion_id')
                ->references('id')
                ->on('tipo_propuestas')
                ->constrained()
                ->onDelete('cascade')
            ;
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soluciontipoinnovas');
    }
}
