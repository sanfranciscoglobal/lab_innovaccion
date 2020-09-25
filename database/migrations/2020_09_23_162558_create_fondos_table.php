<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFondosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fondos', function (Blueprint $table) {
            $table->id();
            $table->boolean('fuente')->comment('0: otra organizacion, 1: propios');
            $table->string('organizacion',250);
            $table->string('nombre_fondo',250)->nullable();
            $table->string('info',250);
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->string('facebook',250)->nullable();
            $table->string('instagram',250)->nullable();
            $table->string('youtube',250)->nullable();
            $table->string('linkedin',250)->nullable();
            $table->string('twitter',250)->nullable();
            $table->string('imagen',250)->nullable();
            $table->boolean('terminos');
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('fondos');
    }
}
