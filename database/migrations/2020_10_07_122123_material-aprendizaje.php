<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MaterialAprendizaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $table->id();
        $table->string('nombre_publicacion');
        $table->string('tema_tratado');
        $table->string('tipo_documento');
        $table->date('fecha_publicacion');
        $table->string('imagen_portada');
        $table->string('descripcion');
        $table->string('fuente_publicacion');
        $table->string('autor_publicacion');
        $table->boolean('terminos');
        $table->foreignId('user_id')->constrained();
        $table->softDeletes();
        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
