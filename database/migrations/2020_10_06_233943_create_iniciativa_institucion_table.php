<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIniciativaInstitucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iniciativa_institucion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iniciativa_id');
            $table->unsignedBigInteger('tipo_institucion_id');

            $table->foreign('iniciativa_id')
                ->references('id')
                ->on('iniciativas')
                ->constrained()
                ->onDelete('cascade');

            $table->foreign('tipo_institucion_id')
                ->references('id')
                ->on('tipo_institucion')->constrained()
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
