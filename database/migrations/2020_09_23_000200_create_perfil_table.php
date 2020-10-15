<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil', function (Blueprint $table) {
            $table->id();
            $table->string('celular');
            $table->enum('proposito', [1, 2, 3])->comment('1:mapear, 2:compartir, 3:participar');
            $table->boolean('tipo_reg')->comment('1:individual, 0:organizacion');
            $table->string('organizacion')->nullable();
            $table->enum('tipo_org', [1, 2, 3, 4])->nullable()->comment('1:academia, 2:privado, 3:publico, 4:civil');
            $table->string('direccion')->nullable();
            $table->foreignId('canton_id')->nullable()->constrained('canton');
            $table->float('latitud', 11, 7)->nullable();
            $table->float('longitud', 11, 7)->nullable();
            $table->string('web')->nullable();
            $table->string('facebook',250)->nullable();
            $table->string('instagram',250)->nullable();
            $table->string('linkedin',250)->nullable();
            $table->string('twitter',250)->nullable();
            $table->boolean('terminos');
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
        Schema::dropIfExists('perfil');
    }
}
