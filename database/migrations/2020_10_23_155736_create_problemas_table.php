<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problemas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('convocatoria_id')->constrained('convocatorias');
            $table->foreignId('tipo_convocatoria_id')->constrained('tipo_convocatoria');
            $table->boolean('sector')->nullable();
            $table->boolean('subsector')->nullable();
            $table->boolean('confidencial')->nullable();
            $table->boolean('recomendaciones')->nullable();
            $table->boolean('datos')->nullable();
            $table->string('actividad', 400)->nullable();
            $table->string('problema', 500)->nullable();
            $table->string('archivo', 280)->nullable();
            $table->json('causas')->nullable();
            $table->json('efectos')->nullable();
            $table->enum('eslabon', [1, 2, 3, 4, 5])->nullable()->comment('1:proveedores, 2:insumos, 3:proceso productivo, 4:producto terminado, 5:cliente y mercado');
            $table->string('grupo_social', 280)->nullable();
            $table->string('descripcion_grupo', 500)->nullable();
            $table->json('keyword')->nullable();
            $table->string('telefono')->nullable();
            $table->string('web')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('imagen', 280)->nullable();
            $table->foreignId('canton_id')->nullable()->constrained('canton');
            $table->string('ubicacion', 280)->nullable();
            $table->float('latitud', 10, 6)->nullable();
            $table->float('longitud', 10, 6)->nullable();
            $table->boolean('terminos')->nullable();
            $table->foreignId('user_id')->nullable()->constrained();
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
        Schema::dropIfExists('problemas');
    }
}
