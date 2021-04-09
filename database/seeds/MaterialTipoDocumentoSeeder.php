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

        MaterialTipodocumento::create(['nombre' => 'Artículo científico', 'tipo' => 1]);
        MaterialTipodocumento::create(['nombre' => 'Blog', 'tipo' => 1]);
        MaterialTipodocumento::create(['nombre' => 'Informe/Reporte', 'tipo' => 1]);
        MaterialTipodocumento::create(['nombre' => 'Libro', 'tipo' => 0]);
        MaterialTipodocumento::create(['nombre' => 'Manual', 'tipo' => 0]);
        MaterialTipodocumento::create(['nombre' => 'Metodología', 'tipo' => 0]);
        MaterialTipodocumento::create(['nombre' => 'Noticia', 'tipo' => 1]);

    }
}
