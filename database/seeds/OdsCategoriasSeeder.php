<?php

use Illuminate\Database\Seeder;
use App\Models\OdsCategoria;

class OdsCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = "ALTER SEQUENCE ods_categorias_id_seq RESTART WITH 1;";
        $sql .= 'TRUNCATE ods_categorias CASCADE;';
        DB::connection()->getPdo()->exec($sql);

        OdsCategoria::create(['nombre' => 'Poner fin a la pobreza']);
        OdsCategoria::create(['nombre' => 'Hambre y seguridad alimentaria']);
        OdsCategoria::create(['nombre' => 'Salud y bienestar']);
        OdsCategoria::create(['nombre' => 'Educación de calidad']);
        OdsCategoria::create(['nombre' => 'Igualdad de género']);
        OdsCategoria::create(['nombre' => 'Agua limpia y saneamiento']);
        OdsCategoria::create(['nombre' => 'Energía asequible y no contaminante']);
        OdsCategoria::create(['nombre' => 'Trabajo decente y crecimiento económico']);
        OdsCategoria::create(['nombre' => 'Industria, innovación e infraestructura']);
        OdsCategoria::create(['nombre' => 'Reducción de las desigualdades']);
        OdsCategoria::create(['nombre' => 'Ciudades y comunidades sostenibles']);
        OdsCategoria::create(['nombre' => 'Producción y consumo responsables']);
        OdsCategoria::create(['nombre' => 'Acción por el clima']);
        OdsCategoria::create(['nombre' => 'Vida submarina']);
        OdsCategoria::create(['nombre' => 'Vida de ecosistemas terrestres']);
        OdsCategoria::create(['nombre' => 'Paz, justicia e instituciones sólidas']);
        OdsCategoria::create(['nombre' => 'Alianzas para lograr los objetivos']);
    }
}
