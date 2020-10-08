<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIniciativaContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iniciativa_contacto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iniciativa_id');
            $table->string('nombre_persona', 250);
            $table->string('celular', 50);
            $table->string('correo_electronico', 150);

            $table->foreign('iniciativa_id')
                ->references('id')
                ->on('iniciativas')
                ->constrained()
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
        Schema::dropIfExists('iniciativa_contacto');
    }
}
