<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIniciativaUbicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iniciativa_ubicacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iniciativa_id');
            $table->unsignedBigInteger('canton_id')->nullable();
            $table->string('direccion', 500);
            $table->string('latitud', 100)->nullable();
            $table->string('longitud', 100)->nullable();
            $table->string('localidad', 100)->nullable();
            $table->string('area1', 100)->nullable();
            $table->string('area2', 100)->nullable();

            $table->foreign('iniciativa_id')
                ->references('id')
                ->on('iniciativas')
                ->constrained()
                ->onDelete('cascade');

            $table->foreign('canton_id')
                ->references('id')
                ->on('canton')->constrained()
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
