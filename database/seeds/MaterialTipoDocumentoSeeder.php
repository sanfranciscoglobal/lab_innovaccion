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
        MaterialTipodocumento::create(['nombre' => 'Blog']);
        MaterialTipodocumento::create(['nombre' => 'Informe/Reporte']);
        MaterialTipodocumento::create(['nombre' => 'Libro']);
        MaterialTipodocumento::create(['nombre' => 'Manual']);
        MaterialTipodocumento::create(['nombre' => 'Metodología']);
        MaterialTipodocumento::create(['nombre' => 'Noticia']);
       
    }
}
