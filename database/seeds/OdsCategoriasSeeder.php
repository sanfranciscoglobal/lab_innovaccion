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

        OdsCategoria::create(['nombre' => 'ODS1']);
        OdsCategoria::create(['nombre' => 'ODS2']);
        OdsCategoria::create(['nombre' => 'ODS3']);
        OdsCategoria::create(['nombre' => 'ODS4']);
    }
}
