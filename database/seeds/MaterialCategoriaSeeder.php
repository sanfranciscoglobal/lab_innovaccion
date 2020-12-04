<?php

use Illuminate\Database\Seeder;
use App\Models\MaterialCategorias;

class MaterialCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sql = "ALTER SEQUENCE material_categorias_id_seq RESTART WITH 1;";
        $sql .= 'TRUNCATE material_categorias CASCADE;';
        DB::connection()->getPdo()->exec($sql);

        MaterialCategorias::create(['nombre' => 'Innovación','imagen'=> 'tipo1.jpg']);
        MaterialCategorias::create(['nombre' => 'Gobierno','imagen'=> 'tipo2.jpg']);
        MaterialCategorias::create(['nombre' => 'Ciudadanía','imagen'=> 'tipo3.jpg']);
    }
}
