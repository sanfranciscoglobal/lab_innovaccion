<?php

use Illuminate\Database\Seeder;
use App\Models\MaterialTipodocumento;

class MaterialTipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sql = "ALTER SEQUENCE material_tipodocumentos_id_seq RESTART WITH 1;";
        $sql .= 'TRUNCATE material_tipodocumentos CASCADE;';
        DB::connection()->getPdo()->exec($sql);

        MaterialTipodocumento::create(['nombre' => 'Artículo científico']);
        MaterialTipodocumento::create(['nombre' => 'Noticia']);
        MaterialTipodocumento::create(['nombre' => 'Libro']);
       
    }
}
