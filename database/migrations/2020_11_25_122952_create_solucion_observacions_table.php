<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolucionObservacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solucion_observaciones', function (Blueprint $table) {
            $table->id();
            $table->boolean('viable');
            $table->String('comentario')->nullable();
            $table->boolean('terminos');
            $table->unsignedBigInteger('solucion_id');
            $table->foreign('solucion_id')
                ->references('id')
                ->on('soluciones')
                ->constrained()
                ->onDelete('cascade')
            ;
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
        Schema::dropIfExists('solucion_observacions');
    }
}
