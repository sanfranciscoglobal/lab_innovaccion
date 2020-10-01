<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Organizador');
            $table->date('Fecha');
            $table->string('Hora');
            $table->string('Imagen');
            $table->string('Descripcion');
            $table->boolean('Tipo');
            $table->string('Canton')->nullable();
            $table->string('Ubicacion')->nullable();
            $table->string('URL')->nullable();
            $table->boolean('Estado');            
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('eventos');
    }
}
