<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('abreviatura_id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula_identidad');
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('fecha_nacimiento')->nullable();
            $table->string('imagen')->nullable();
            $table->foreign('abreviatura_id')->references('id')->on('abreviatura')->constrained()
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
        Schema::dropIfExists('perfil');
    }
}
