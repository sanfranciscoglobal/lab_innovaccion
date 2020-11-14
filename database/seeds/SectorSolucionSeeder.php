<?php

use Illuminate\Database\Seeder;
use App\Models\SectorSolucion;

class SectorSolucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sql = "ALTER SEQUENCE sector_solucion_id_seq RESTART WITH 1;";
        $sql .= 'TRUNCATE sector_solucion CASCADE;';
        DB::connection()->getPdo()->exec($sql);

        SectorSolucion::create(['nombre' => 'Academia']);
        SectorSolucion::create(['nombre' => 'Sector público']);
        SectorSolucion::create(['nombre' => 'Empresarial / Productivo']);
        SectorSolucion::create(['nombre' => 'Gremio']);
        SectorSolucion::create(['nombre' => 'Organización de la Sociedad Civil']);
        SectorSolucion::create(['nombre' => 'Organismo Internacional']);
        SectorSolucion::create(['nombre' => 'Ciudadanía']);
    }
}
