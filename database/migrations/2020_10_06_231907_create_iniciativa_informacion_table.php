<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIniciativaInformacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iniciativa_informacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_iniciativa', 250);
            $table->integer('anio');
            $table->string('vigencia', 10);
            $table->string('logo', 250);
            $table->text('componente_innovador');
            $table->text('descripcion_iniciativa');
            $table->string('url_facebook', 250)->nullable();
            $table->string('url_twitter', 250)->nullable();
            $table->string('url_linkedin', 250)->nullable();
            $table->string('url_youtube', 250)->nullable();
            $table->string('url_instagram', 250)->nullable();
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
        Schema::dropIfExists('iniciativa_informacion');
    }
}
