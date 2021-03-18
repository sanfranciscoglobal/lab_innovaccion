<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialTipodocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_tipodocumentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('tipo')->comment('Publicacion-0/Herramienta-1');
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
        Schema::dropIfExists('material_tipodocumentos');
    }
}
