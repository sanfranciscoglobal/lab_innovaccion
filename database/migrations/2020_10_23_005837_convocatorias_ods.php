<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConvocatoriasOds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('convocatorias_ods', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('convocatoria_id');
            $table->unsignedBigInteger('ods_id');
            $table->foreign('convocatoria_id')
            ->references('id')
            ->on('convocatorias')
            ->constrained()
            ->onDelete('cascade');
            $table->foreign('ods_id')
                ->references('id')
                ->on('ods_categorias')->constrained()
                ->onDelete('cascade');
            // $table->foreign('ods_id')
            // ->references('id')
            // ->on('objetivosdesarrollo')
            // ->constrained()
            // ->onDelete('cascade');
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
        //
        Schema::dropIfExists('convocatorias_ods');
    }
}
