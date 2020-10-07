<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIniciativaActorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iniciativa_actor', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_organizacion', 250);
            $table->unsignedBigInteger('tipo_institucion_id');
            $table->unsignedBigInteger('canton_id');
            $table->string('siglas', 50)->nullable();
            $table->string('sitio_web', 250)->nullable();
            $table->text('enfoque');
            $table->string('direccion', 500);
            $table->string('latitud', 100);
            $table->string('longitud', 100);

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
        Schema::dropIfExists('iniciativa_actor');
    }
}
