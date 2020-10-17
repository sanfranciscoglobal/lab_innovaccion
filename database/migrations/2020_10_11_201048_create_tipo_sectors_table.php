<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_sector', function (Blueprint $table) {
           
            $table->id();
            $table->unsignedBigInteger('convocatoria_id')->nullable();
            $table->string('nombre');
            $table->foreign('convocatoria_id')->references('id')->on('tipo_convocatoria')->onDelete('SET NULL');
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
        Schema::dropIfExists('tipo_sector');
    }
}
