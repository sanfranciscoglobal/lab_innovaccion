<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_comentarios', function (Blueprint $table) {
           
            $table->id();
            // $table->string('nombre_user');
            // $table->string('correo_user');
            $table->text('comentario');
            $table->boolean('estado')->default(TRUE)->comment('Publico-1/Privado-0'); 
            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')
                ->references('id')
                ->on('materialesaprendizaje')
                ->constrained()
                ->onDelete('cascade')
            ;
            $table->foreignId('user_id')->nullable()->constrained();
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
        Schema::dropIfExists('material_comentarios');
    }
}
