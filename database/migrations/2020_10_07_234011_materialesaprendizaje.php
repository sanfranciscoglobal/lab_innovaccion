<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Materialesaprendizaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('materialesaprendizaje', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_publicacion');
            $table->date('fecha_publicacion')->nullable();
            $table->string('tema_tratado');
            $table->string('tipo_documento');
            $table->boolean('tipo')->comment('Publicacion-0/Herramienta-1'); 
            //$table->string('imagen_portada');
            $table->text('fuente_publicacion');
            $table->text('descripcion_publicacion');
            $table->string('autor_publicacion')->nullable();
            $table->boolean('estado')->default(FALSE)->comment('No aprobado-1/Aprobado-0');                
            $table->boolean('terminos');
            $table->foreignId('user_id')->constrained();
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
        //
        Schema::dropIfExists('materialesaprendizaje');
    }
}
