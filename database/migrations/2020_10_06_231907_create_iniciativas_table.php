<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIniciativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iniciativas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estado_registro_id');
            $table->unsignedBigInteger('iniciativa_origen_id');
            $table->unsignedBigInteger('iniciativa_actor_id')->nullable();
            $table->unsignedBigInteger('iniciativa_informacion_id');

            $table->foreign('estado_registro_id')
                ->references('id')
                ->on('estado_registro')->constrained()
                ->onDelete('cascade');

            $table->foreign('iniciativa_origen_id')
                ->references('id')
                ->on('iniciativa_origen')->constrained()
                ->onDelete('cascade');

            $table->foreign('iniciativa_actor_id')
                ->references('id')
                ->on('iniciativa_actor')->constrained()
                ->onDelete('cascade');

            $table->foreign('iniciativa_informacion_id')
                ->references('id')
                ->on('iniciativa_informacion')->constrained()
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
        Schema::dropIfExists('iniciativa');
    }
}
