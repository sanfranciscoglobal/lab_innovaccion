<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIniciativaOdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iniciativa_ods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iniciativa_id');
            $table->unsignedBigInteger('ods_categoria_id');

            $table->foreign('iniciativa_id')
                ->references('id')
                ->on('iniciativa_actor')
                ->constrained()
                ->onDelete('cascade');

            $table->foreign('ods_categoria_id')
                ->references('id')
                ->on('ods_categorias')->constrained()
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
