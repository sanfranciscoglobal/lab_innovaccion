<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIniciativaPoblacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iniciativa_poblacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iniciativa_id');
            $table->unsignedBigInteger('tipo_poblacion_id');

            $table->foreign('iniciativa_id')
                ->references('id')
                ->on('iniciativas')
                ->constrained()
                ->onDelete('cascade');

            $table->foreign('tipo_poblacion_id')
                ->references('id')
                ->on('tipo_poblacion')->constrained()
                ->onDelete('cascade');

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
        Schema::dropIfExists('iniciativa_ubicacion');
    }
}
