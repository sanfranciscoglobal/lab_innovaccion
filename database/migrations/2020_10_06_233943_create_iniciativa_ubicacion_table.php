<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIniciativaUbicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iniciativa_ubicacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iniciativa_actor_id');
            $table->unsignedBigInteger('canton_id');

            $table->foreign('iniciativa_actor_id')
                ->references('id')
                ->on('iniciativa_actor')
                ->constrained()
                ->onDelete('cascade');

            $table->foreign('canton_id')
                ->references('id')
                ->on('canton')->constrained()
                ->onDelete('cascade');

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
        Schema::dropIfExists('iniciativa_ubicacion');
    }
}
