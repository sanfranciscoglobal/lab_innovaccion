<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoSubsectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_subsector', function (Blueprint $table) {
           
            $table->id();
            $table->unsignedBigInteger('sector_id')->nullable();
            $table->string('nombre');

            $table->foreign('sector_id')->references('id')->on('tipo_sector')->constrained()
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
        Schema::dropIfExists('tipo_subsector');
    }
}
